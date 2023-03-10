<?php 

namespace Front\Helpers;

class Asset {
    public function build($path) {
        $webrootDir = "webroot/site/dist/";
        if(app()->config("debug")) {
            $webrootDir = "webroot/site/src/";
        }
        if(str_contains($path, "js/")) {
            $webrootDir = "webroot/site/dist/";
        }

        $subfolders = str_replace("index.php", "", $_SERVER["SCRIPT_NAME"]);
        $fullPath = $_SERVER['HTTP_HOST'] . $subfolders . $webrootDir . $path;

        $fullPath = str_replace("\\", "/", $fullPath);
        $fullPath = str_replace("//", "/", $fullPath);
        
        return "//" . $fullPath;
    }
}