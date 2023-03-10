<?php

use Front\Helpers\Asset;
use Front\Views\View;

require __DIR__ . "/vendor/autoload.php";

$app = new Leaf\App(["debug" => true]);

$app->template->config("path", "./src/Template/");

$app->template->config("params", ["app" => function () {
    return app();
}]);

app()->register("view", function ($c) {
    return new View();
});

app()->register("faker", function ($c) {
    return Faker\Factory::create();
});

app()->register("asset", function ($c) {
    return new Asset();
});

require_once(__DIR__ . "/routes.php");

$app->run();
