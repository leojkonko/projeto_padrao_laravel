<?php

namespace Front\Views;

class View {
    protected $header = './Layout/header';
    protected $footer = './Layout/footer';

    public function render($file, $args = []) {
        echo app()->template->render($this->header, $args);
        echo app()->template->render("Paginas/" . $file, $args);
        echo app()->template->render($this->footer, $args);
    }
    public function setHeader($headerName) {
        $this->header = "./Layout/" . $headerName;
    }

    public function setFooter($footerName) {
        $this->footer = "./Layout/" . $footerName;
    }
}