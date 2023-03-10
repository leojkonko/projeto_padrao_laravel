// Imports
import fs from "fs"; // Acessar arquivos
import gulp from "gulp";
import autoprefixer from "gulp-autoprefixer";
import cleancss from "gulp-clean-css";
import concat from "gulp-concat";
import imagemin from "gulp-imagemin";
import gcmd from "gulp-group-css-media-queries";
import plumber from "gulp-plumber";
import replace from "gulp-replace"; // Pacote para adicionar strings dentro de arquivos
import gulpSass from "gulp-sass";
import sourcemaps from "gulp-sourcemaps";
import uglify from "gulp-uglify";
import dartSass from "sass"; // Imports do dart sass
import yargs from "yargs"; // Pacote que permite a passagem de parametros pela linha de comando
import browserSync, { watch } from "browser-sync";
import chalk from "chalk";
import gulpif from "gulp-if";
import { performance } from "perf_hooks";
import appendPrepend from "gulp-append-prepend";
import purgecss from "gulp-purgecss";
import path from "path";

const argv = yargs(process.argv).argv;
const sass = gulpSass(dartSass);

// Variável que controla se o browsersync vai ser "ativado"
var syncBrowser = argv.sync == true ? true : false;

// Url do projeto que vai ser iniciado
var browserSyncProxy = "http://localhost/front/padraofrontv2/";

// Opções para o gulp.watch
var watchOptions = {
	usePolling: true,
};

var icones = ["./webroot/site/src/fonts/icons/*.svg"];
// Caminho com todas extensões de imagens
var imagens = [
	"./webroot/site/src/images/**/*.png",
	"./webroot/site/src/images/**/*.jpeg",
	"./webroot/site/src/images/**/*.jpg",
	"./webroot/site/src/images/**/*.gif",
	"./webroot/site/src/images/**/*.svg",
];

// Caminho de todos arquivos sass
var sassSource = [
	"./webroot/site/src/sass/**/*.scss",
	"./webroot/site/src/sass/**/*.sass",
];

var jsVendor = "./webroot/site/src/js/vendors/**/*.*";

// Caminho de todos arquivos js
var js = [
	"./webroot/site/src/js/**/*.js",
	`!${jsVendor}`,
	"!./webroot/site/src/js/**/custom.js",
];

var cssVendor = "./webroot/site/src/css/vendors/**/*.css";

// Caminho de todos arquivos css
var css = [
	"./webroot/site/src/css/**/*.css",
	`!${cssVendor}`,
	"!./webroot/site/src/css/**/custom.css",
];

var vendorsFolder = [jsVendor, cssVendor];

// Caminho de todas fontes
var fonts = [
	"./webroot/site/src/fonts/**/*.ttf",
	"./webroot/site/src/fonts/**/*.otf",
	"./webroot/site/src/fonts/**/*.woff",
	"./webroot/site/src/fonts/**/*.woff2",
	"./webroot/site/src/fonts/**/*.eot",
];

// Caminho de todos arquivos .view.php dentro de Template
var php = ["./src/Template/**/*.view.php"];

var arquivoMain = "./webroot/site/src/sass/main.scss";
var arquivoBootstrap = "./webroot/site/src/sass/vendors/bootstrap/bootstrap.scss";
var arquivoVariaveisProjeto = "abstracts/_variables.scss";

var arquivosSass = {
	"/vendors/bootstrap":
		"./webroot/site/src/sass/vendors/bootstrap/bootstrap.scss",
	"/": arquivoMain,
};

if (syncBrowser) {
	browserSync.init({
		proxy: browserSyncProxy,
	});
}

function unlinkFile(path) {
	path = path.replace("src", "dist").replace(/\\/g, "/");

	fs.unlink(path, (err) => {
		var data = getTime();
		if (err) {
			console.log(
				`[${chalk.gray(getTime())}] Not able to delete '${chalk.magenta(path)}'`
			);
		} else {
			console.log(
				`[${chalk.gray(getTime())}] Deleted '${chalk.magenta(path)}'`
			);
		}
	});
}

function getTime() {
	var date = new Date();
	var seconds = date.getSeconds();
	var minutes = date.getMinutes();
	var hour = date.getHours();

	return `${leadingZeroes(hour)}:${leadingZeroes(minutes)}:${leadingZeroes(
		seconds
	)}`;
}

function leadingZeroes(integer) {
	if (integer < 10) {
		return "0" + integer.toString();
	} else {
		return integer.toString();
	}
}

// Tarefas para assistir arquivos
gulp.task("watch:images", async function () {
	const imagesWatcher = gulp.watch(imagens, watchOptions);

	// Minifica imagem que foi alterada
	imagesWatcher.on("all", function (event, fileName) {
		fileName = fileName.replace(/\\/g, "/");
		if (event != "unlink") {
			// Pega hora para informar no console
			var start = performance.now();
			var arquivo = fileName.substring(fileName.lastIndexOf("/") + 1);

			// Mensagem started...
			console.log(
				`[${chalk.gray(getTime())}] Starting '${chalk.cyan(
					"minify:images"
				)}' ==> ${chalk.magenta(arquivo)}`
			);

			gulp
				.src(fileName)
				.pipe(imagemin()) // Minifica imagens
				.pipe(gulp.dest(fileName.replace("src", "dist").replace(arquivo, "")));

			// Mensagem finished...
			console.log(
				`[${chalk.gray(getTime())}] Finished '${chalk.cyan(
					"minify:images"
				)}' after ${chalk.magenta(parseInt(performance.now() - start) + " ms")}`
			);
		} else {
			unlinkFile(fileName);
		}
	});
});

gulp.task("watch:js", async function () {
	// Arquivos js
	const jsWatcher = gulp.watch(js, watchOptions);

	jsWatcher.on("all", function (event, fileName) {
		if (event != "unlink") {
			fileName = fileName.replace(/\\/g, "/");
			var start = performance.now();

			console.log(
				`[${chalk.gray(getTime())}] Starting '${chalk.cyan(
					"concat:js"
				)}' ==> ${chalk.magenta("main.js")}`
			);

			gulp
				.src(js)
				.pipe(plumber()) // Error handling
				.pipe(concat("main.js")) // Concatena js
				.pipe(uglify()) // Minifica
				.pipe(gulp.dest("./webroot/site/dist/js"))
				.pipe(gulpif(syncBrowser, browserSync.stream()));

			console.log(
				`[${chalk.gray(getTime())}] Finished '${chalk.cyan(
					"concat:js"
				)}' after ${chalk.magenta(parseInt(performance.now() - start) + " ms")}`
			);
		}
	});
});

gulp.task("watch:css", async function () {
	// Arquivos js
	const cssWatcher = gulp.watch(css, watchOptions);

	cssWatcher.on("all", function (event, fileName) {
		if (event != "unlink") {
			fileName = fileName.replace(/\\/g, "/");

			// Pega hora para informar no console
			var data = getTime();

			var start = performance.now();

			console.log(
				`[${chalk.gray(getTime())}] Starting '${chalk.cyan(
					"minify:css"
				)}' ==> ${chalk.magenta(
					chalk.magenta(fileName.substring(fileName.lastIndexOf("/") + 1))
				)}`
			);

			gulp
				.src(fileName)
				.pipe(gcmd()) // Agrupa os media queries
				.pipe(autoprefixer()) // Autoprefixa CSS
				.pipe(cleancss()) // Minifica CSS
				.pipe(gulp.dest("./webroot/site/dist/css"))
				.pipe(gulpif(syncBrowser, browserSync.stream()));

			console.log(
				`[${chalk.gray(getTime())}] Finished '${chalk.cyan(
					"minify:css"
				)}' after ${chalk.magenta(parseInt(performance.now() - start) + " ms")}`
			);
		} else {
			unlinkFile(fileName);
		}
	});
});

function compileSass(path) {
	var start = performance.now();

	console.log(
		`[${chalk.gray(getTime())}] Starting '${chalk.cyan(
			"compile:sass"
		)}' ==> ${chalk.magenta(path.substring(path.lastIndexOf("/") + 1))}`
	);

	gulp
		.src(path)
		.pipe(plumber()) // Error handling
		.pipe(sourcemaps.init())
		.pipe(sass.sync()) // Sass
		.pipe(sourcemaps.write("."))
		.pipe(gulp.dest("./webroot/site/src/css")); // Envia para pasta de destino
	console.log(
		`[${chalk.gray(getTime())}] Finished '${chalk.cyan(
			"compile:sass"
		)}' after ${chalk.magenta(parseInt(performance.now() - start) + " ms")}`
	);

	return;
}

gulp.task("watch:sass", async function () {
	const sassWatcher = gulp.watch(sassSource, watchOptions);

	sassWatcher.on("all", function (event, fileName) {
		if (event != "unlink") {
			fileName = fileName.replace(/\\/g, "/");

			// Caso o arquivo _variables for modificado, compilamos o bootstrap e o main.scss
			if (fileName.search(arquivoVariaveisProjeto) !== -1) {
				compileSass(arquivoMain);
				compileSass(arquivoBootstrap);
			} else {
				let pastas = arquivosSass;

				for (let padrao in pastas) {
					if (fileName.search(padrao) !== -1) {
						compileSass(pastas[padrao]);
						break;
					}
				}
			}
		}
	});
});

gulp.task("watch:fonts", async function () {
	const fontsWatch = gulp.watch(fonts, watchOptions);

	fontsWatch.on("all", function (event, fileName) {
		if (event != "unlink") {
			fileName = fileName.replace(/\\/g, "/");
			var data = getTime();

			var start = performance.now();

			var arquivo = fileName.substring(fileName.lastIndexOf("/") + 1);

			console.log(
				`[${chalk.gray(getTime())}] Starting '${chalk.cyan(
					"copy:fonts"
				)}' ==> ${chalk.magenta(arquivo)}`
			);

			gulp
				.src(fileName)
				.pipe(gulp.dest(fileName.replace("src", "dist").replace(arquivo, "")));

			console.log(
				`[${chalk.gray(getTime())}] Finished '${chalk.cyan(
					"copy:fonts"
				)}' after ${chalk.magenta(parseInt(performance.now() - start) + " ms")}`
			);
		} else {
			unlinkFile(fileName);
		}
	});
});

gulp.task("watch:vendors", async function () {
	const vendorsWatch = gulp.watch(vendorsFolder, watchOptions);

	vendorsWatch.on("all", function (event, fileName) {
		if (event != "unlink") {
			fileName = fileName.replace(/\\/g, "/");
			var data = getTime();

			var start = performance.now();

			var arquivo = fileName.substring(fileName.lastIndexOf("/") + 1);

			console.log(
				`[${chalk.gray(getTime())}] Starting '${chalk.cyan(
					"copy:vendors"
				)}' ==> ${chalk.magenta(arquivo)}`
			);

			gulp
				.src(fileName)
				.pipe(gulp.dest(fileName.replace("src", "dist").replace(arquivo, "")));

			console.log(
				`[${chalk.gray(getTime())}] Finished '${chalk.cyan(
					"copy:vendors"
				)}' after ${chalk.magenta(parseInt(performance.now() - start) + " ms")}`
			);
		} else {
			unlinkFile(fileName);
		}
	});
});

gulp.task("watch:php", async function () {
	if (syncBrowser) {
		const phpWatch = gulp.watch(php, watchOptions);

		phpWatch.on("all", function (event, fileName) {
			browserSync.reload();
		});
	}
});


// Tarefas para processar todos arquivos do tipo
gulp.task("run:images", async function () {
	// Extensões de imagem
	gulp
		.src(imagens)
		.pipe(imagemin()) // Minifica imagens
		.pipe(gulp.dest("./webroot/site/dist/images"));
});

gulp.task("run:js", async function () {
	// Arquivos js
	gulp
		.src(js)
		.pipe(plumber()) // Error handling
		.pipe(concat("main.js")) // Concatena js
		.pipe(uglify()) // Minifica
		.pipe(gulp.dest("./webroot/site/dist/js"));
});

gulp.task("run:js:vendors", async function () {
	// Arquivos css
	gulp.src(jsVendor).pipe(gulp.dest("./webroot/site/dist/js/vendors"));
});

gulp.task("run:css", async function () {
	// Arquivos css
	gulp
		.src(css)
		.pipe(gcmd()) // Agrupa os media queries
		.pipe(autoprefixer()) // Autoprefixa CSS
		.pipe(cleancss()) // Minifica CSS
		.pipe(gulp.dest("./webroot/site/dist/css"));
});

gulp.task("run:css:vendors", async function () {
	// Arquivos css
	gulp.src(cssVendor).pipe(gulp.dest("./webroot/site/dist/css/vendors"));
});

gulp.task("run:sass", async function () {
	let pastas = arquivosSass;

	for (let padrao in pastas) {
		compileSass(pastas[padrao]);
	}
});

gulp.task("run:fonts", async function () {
	gulp.src(fonts).pipe(gulp.dest("./webroot/site/dist/fonts"));
});


/*
 * Tarefas gerais
 */
gulp.task(
	"watch:all",
	gulp.series(
		"watch:images",
		"watch:css",
		"watch:sass",
		"watch:fonts",
		"watch:vendors",
		"watch:js",
		"watch:php",
	)
);

gulp.task(
	"run:all",
	gulp.series(
		"run:images",
		"run:css",
		"run:css:vendors",
		"run:sass",
		"run:fonts",
		"run:js",
		"run:js:vendors",
	)
);

/*
 * Tarefas informativas
 */
gulp.task("debug:installation", async function () {
	console.log("A instalação ocorreu sem problemas.");
});

/*
 * Default
 */
gulp.task("default", gulp.series("watch:all"));

/**
 * Tarefas para criar arquivos
 */
gulp.task("new:partial", async function () {
	let mediaQueriesScss =
		"@include media-breakpoint-up(xxl) {}\n@include media-breakpoint-up(xl) {}\n@include media-breakpoint-up(lg) {}\n@include media-breakpoint-up(md) {}\n@include media-breakpoint-up(sm) {}\n";

	// Tarefa que cria um novo arquivo .sass
	// Pode ser utilizada com o seguinte comando:
	/* 
        gulp new:partial --pasta [nomedapasta] --nome [nomedoarquivo] --tipo [tipodoarquivo]]
        Ex: gulp new:partial --pasta funcoes --nome manipulacaoDeStrings --tipo sass
        Código acima resultará em um arquivo em: ./webroot/site/src/sass/funcoes/_manipulacaoDeStrings.sass
    */
	// Verifica se o arquivo padrão existe
	let nome = argv.nome ? argv.nome : "nomePadrao";
	let pasta = argv.pasta ? argv.pasta : "";
	let tipo = ".scss";
	// Verifica se o arquivo que vai ser criado já existe
	// Evita erro de sobrescrever um arquivo existente
	fs.access(`./webroot/site/src/sass/${pasta}/_${nome + tipo}`, (err2) => {
		if (err2) {
			// Verifica se pasta existe, caso não exista as pastas são criadas
			let dir = `./webroot/site/src/sass/${pasta}/`;
			if (!fs.existsSync(dir)) {
				fs.mkdirSync(dir, { recursive: true });
			}
			// Verifica se o arquivo for .scss se for, ele adiciona os media queries com {} no final
			fs.writeFileSync(
				`./webroot/site/src/sass/${pasta}/_${nome + tipo}`,
				mediaQueriesScss
			);
			// Adiciona @import dentro do arquivo principal do sass
			let localArquivo = `\n@import "${pasta}/${nome}";`;
			let pastaFiltrada = pasta.split("/")[0];
			gulp
				.src(`./webroot/site/src/sass/_${pastaFiltrada}.scss`)
				.pipe(appendPrepend.appendText(localArquivo))
				.pipe(gulp.dest("./webroot/site/src/sass/"));
		} else {
			console.log("Arquivo já existe");
		}
	});
});

gulp.task("new:element", async function () {
	// Tarefa que cria um novo arquivo dentro da pasta Element
	// Pode ser utilizada com o seguinte comando:
	/* 
        gulp new:element --nome [nome do elemento]
        Ex: gulp new:element --nome formulario
        Código acima resultará em um arquivo em: ./src/Template/Element/formulario.view.php
    */
	let nome = argv.nome ? argv.nome : "nomePadrao";

	// Verifica se o arquivo que vai ser criado já existe
	// Evita erro de sobrescrever um arquivo existente
	fs.access(`./src/Template/Element/${nome + ".view.php"}`, (err2) => {
		if (err2) {
			// Cria arquivo
			fs.writeFileSync(`./src/Template/Element/${nome + ".view.php"}`, "");
		} else {
			console.log("Arquivo já existe");
		}
	});
});

gulp.task("new:page", async function () {
	// Tarefa que cria uma nova pagina arquivo dentro da pasta Paginas
	// Pode ser utilizada com o seguinte comando:
	/* 
        gulp new:page --nome [nome da pagina]
        Ex: gulp new:page --nome contato
        Código acima resultará em um arquivo em: ./src/Template/Paginas/contato.view.php
    */
	// Verifica se foi passado um nome com parametro
	let nome = argv.nome ? argv.nome : "nomePadrao";

	// Verifica se o arquivo que vai ser criado já existe
	// Evita erro de sobrescrever um arquivo existente
	fs.access(`./src/Template/Paginas/${nome + ".view.php"}`, (err2) => {
		if (err2) {
			// Cria arquivo
			fs.writeFileSync(`./src/Template/Paginas/${nome + ".view.php"}`, "");
		} else {
			console.log("Arquivo já existe");
		}
	});
});

gulp.task("new:page", async function () {
	// Tarefa que cria uma nova pagina arquivo dentro da pasta Paginas
	// Pode ser utilizada com o seguinte comando:
	/* 
        gulp new:page --nome [nome da pagina]
        Ex: gulp new:page --nome contato
        Código acima resultará em um arquivo em: ./src/Template/Paginas/contato.view.php
    */
	// Verifica se foi passado um nome com parametro
	let nome = argv.nome ? argv.nome : "nomePadrao";

	// Verifica se o arquivo que vai ser criado já existe
	// Evita erro de sobrescrever um arquivo existente
	fs.access(`./src/Template/Paginas/${nome + ".view.php"}`, (err2) => {
		if (err2) {
			// Cria arquivo
			fs.writeFileSync(`./src/Template/Paginas/${nome + ".view.php"}`, "");
		} else {
			console.log("Arquivo já existe");
		}
	});
});

gulp.task("watch:purge", async function () {
	const purgeWatcher = gulp.watch(["./src/Template/**/*.view.php"], watchOptions);

	purgeWatcher.on("all", function (event, fileName) {
		fileName = fileName.replace(/\\/g, "/");
		if (fileName.includes("footer") || fileName.includes("header")) {
			var pasta = "./src/Template/Paginas/";
			fs.readdir(pasta, function (err, files) {
				if (err) {
					console.error("Não foi possível encontrar a pasta.", err);
				} else {
					files.forEach(function (file, index) {
						// Make one pass and make the file complete
						var arquivo = path.join(pasta, file);
						var arquivoSemExtensao = file.split(".")[0];

						fs.stat(arquivo, function (error, stat) {
							if (stat.isFile()) {
                                var start = performance.now();
								arquivo = arquivo.replace(/\\/g, "/");
								console.log(
									`[${chalk.gray(getTime())}] Starting '${chalk.cyan(
										"purge:css:all"
									)}' ==> ${chalk.magenta(file)}`
								);

								gulp
									.src("./webroot/site/dist/css/**/*.css")
									.pipe(
										purgecss({
											content: [
												"./src/Template/Layout/header.view.php",
												arquivo,
												"./src/Template/Layout/footer.view.php",
											],
										})
									) // Minifica imagens
									.pipe(
										gulp.dest(
											"./webroot/site/dist/purgedcss/" + arquivoSemExtensao
										)
									);

								// Mensagem finished...
								console.log(
									`[${chalk.gray(getTime())}] Finished '${chalk.cyan(
										"purge:css:all"
									)}' after ${chalk.magenta(
										parseInt(performance.now() - start) + " ms"
									)}`
								);
							}
						});
					});
				}
			});
			return;
			console.log("dlaoda");
		}
		if (event != "unlink") {
			// Pega hora para informar no console
			var start = performance.now();
			var arquivo = fileName.substring(fileName.lastIndexOf("/") + 1);
			var arquivoSemExtensao = arquivo.split(".")[0];
			// Mensagem started...
			console.log(
				`[${chalk.gray(getTime())}] Starting '${chalk.cyan(
					"purge:css"
				)}' ==> ${chalk.magenta(arquivo)}`
			);

			gulp
				.src("./webroot/site/dist/css/**/*.css")
				.pipe(
					purgecss({
						content: [
							"./src/Template/Layout/header.view.php",
							fileName,
							"./src/Template/Layout/footer.view.php",
						],
					})
				) // Minifica imagens
				.pipe(gulp.dest("./webroot/site/dist/purgedcss/" + arquivoSemExtensao));

			// Mensagem finished...
			console.log(
				`[${chalk.gray(getTime())}] Finished '${chalk.cyan(
					"purge:css"
				)}' after ${chalk.magenta(parseInt(performance.now() - start) + " ms")}`
			);
		}
	});
});
