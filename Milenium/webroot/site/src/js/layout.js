// Scripts especificos do layout
/**
 * Exemplo:
 * Se precisar adicionar alguma classe ou manipular algum elemento
 *
 *
 */

/* 
Exemplo de um intersection observer
const exampleObserver = new IntersectionObserver(
	(entries, observer) => {
		entries.forEach((entry) => {
			if (entry.isIntersecting) {
				observer.unobserve(entry.target);
                // Executar código aqui
			}
		});
	},
	{
		rootMargin: "0px 0px 0px 0px",
	}
);
exampleObserver.observe(document.querySelector(".teste"));
*/

// Smooth scroll para seção
(function () {
	document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
		anchor.addEventListener("click", function (e) {
			e.preventDefault();
			if (this.getAttribute("href") !== "#") {
				let target = document.querySelector(this.getAttribute("href"));
				if (target) {
					target.scrollIntoView({
						behavior: "smooth",
						block: "center",
						inline: "center",
					});
				}
			}
		});
	});
})();

// Lazy loading das imagens que possuem data-src
(function () {
	var lazyLoadImages = document.querySelectorAll("img[data-src]");
	if (lazyLoadImages) {
		const lazyLoadObserver = new IntersectionObserver(
			(entries, observer) => {
				entries.forEach((entry) => {
					if (entry.isIntersecting) {
						let currentImage = entry.target;
						currentImage.src = currentImage.dataset.src; // src = data-src
						// Remove loader caso ele seja o proximo irmao daquela imagem
						entry.target.addEventListener("load", function () {
							let loader = this.nextElementSibling;
							if (loader && loader.classList.contains("loader"))
								loader.remove();
						});
						observer.unobserve(entry.target);
					}
				});
			},
			{
				rootMargin: "50% 50% 50% 50%",
			}
		);

		lazyLoadImages.forEach((el) => {
			lazyLoadObserver.observe(el);
		});
	}
})();



// texto do select
/*
window.addEventListener('resize', function() {
	var select = document.getElementById("mySelect");
	if (window.innerWidth < 992) {
	  var newOption = document.createElement("option");
	  newOption.text = "Opção 4";
	  newOption.value = "4";
	  newOption.selected = true;
	  select.add(newOption);
	} else {
	  select.remove(3);
	}
  });*/
  
  var optionCreated = false;

function addOptionOnResize() {
  var select = document.getElementById("mySelect");
  if (window.innerWidth < 992 && !optionCreated) {
    var newOption = document.createElement("option");
    newOption.text = "Selecione uma cidade";
    newOption.value = "4";
    select.add(newOption);
    newOption.selected = true;
    optionCreated = true;
  } else if (window.innerWidth >= 992 && optionCreated) {
    select.remove(3);
    optionCreated = false;
  }
}

setInterval(function() {
  addOptionOnResize();
}, 100);

  
  
