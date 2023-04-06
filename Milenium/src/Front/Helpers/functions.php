<?php

use Front\Helpers\Asset;
use Front\Helpers\Url;

function asset($path) {
    $asset = new Asset;
    return $asset->build($path);
}

function url($path) {
    $url = new Url;
    return $url->build($path);
}

function element($path, array $vars = []) {
    return app()->template->render('./Element/' . $path, $vars);
}