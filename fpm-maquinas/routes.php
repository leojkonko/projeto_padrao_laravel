<?php

use Leaf\Router;


// Rotas do site
Router::get('/', function () {
    app()->view->render('home', [
        'pagina_atual' => 'home',
        'title' => 'Home',
    ]);
});

Router::get('/empresa', function () {
    app()->view->render('empresa', [
        'pagina_atual' => 'empresa',
        'title' => 'Empresa',
        'breadcrumbs' => [
            [
                'title' => 'Home',
                'url' => url('/')
            ],
            [
                'title' => 'Empresa',
            ],
        ],
    ]);
});

Router::get('/blog-detalhe', function () {
    app()->view->render('blog_detalhe', [
        'pagina_atual' => 'blog_detalhe',
        'title' => 'Post detalhe',
        'breadcrumbs' => [
            [
                'title' => 'Home',
                'url' => url('/')
            ],
            [
                'title' => 'Blog',
                'url' => url('/blog')
            ],
            [
                'title' => 'Post detalhe',
            ],
        ],
    ]);
});

Router::get('/blog', function () {
    app()->view->render('blog', [
        'pagina_atual' => 'blog',
        'title' => 'Blog',
        'breadcrumbs' => [
            [
                'title' => 'Home',
                'url' => url('/')
            ],
            [
                'title' => 'Blog',
            ],
        ],
    ]);
});

Router::get('/contato', function () {
    app()->view->render('contato', [
        'pagina_atual' => 'contato',
        'title' => 'Contato',
        'breadcrumbs' => [
            [
                'title' => 'Home',
                'url' => url('/')
            ],
            [
                'title' => 'Contato',
            ],
        ],
    ]);
});

Router::get('/politica-de-privacidade', function () {
    app()->view->render('politica', [
        'pagina_atual' => 'politica',
        'title' => 'Política de privacidade',
        'breadcrumbs' => [
            [
                'title' => 'Home',
                'url' => url('/')
            ],
            [
                'title' => 'Política de privacidade',
            ],
        ],
    ]);
});

Router::get('/produto-detalhe', function () {
    app()->view->render('produto_detalhe', [
        'pagina_atual' => 'produto_detalhe',
        'title' => "Produto detalhe",
        'breadcrumbs' => [
            [
                'title' => 'Home',
                'url' => url('/')
            ],
            [
                'title' => 'Produtos',
                'url' => url('/produtos')
            ],
            [
                'title' => 'Produto detalhe',
            ],
        ],
    ]);
});

Router::get('/produtos', function () {
    app()->view->render('produtos', [
        'pagina_atual' => 'produtos',
        'title' => "Produtos",
        'breadcrumbs' => [
            [
                'title' => 'Home',
                'url' => url('/')
            ],
            [
                'title' => 'Produtos',
            ],
        ],
    ]);
});

Router::get('/solucao-detalhe', function () {
    app()->view->render('solucao_detalhe', [
        'pagina_atual' => 'solucao_detalhe',
        'title' => "Solução detalhe",
        'breadcrumbs' => [
            [
                'title' => 'Home',
                'url' => url('/')
            ],
            [
                'title' => 'Soluções',
                'url' => url('/solucoes')
            ],
            [
                'title' => 'Solução detalhe',
            ],
        ],
    ]);
});

Router::get('/solucoes', function () {
    app()->view->render('solucoes', [
        'pagina_atual' => 'solucoes',
        'title' => "Soluções",
        'breadcrumbs' => [
            [
                'title' => 'Home',
                'url' => url('/')
            ],
            [
                'title' => 'Soluções',
            ],
        ],
    ]);
});
