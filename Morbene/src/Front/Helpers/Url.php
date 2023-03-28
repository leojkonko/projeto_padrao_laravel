<?php 

namespace Front\Helpers;

class Url {
    public function build($path) {
        $subfolders = str_replace("index.php", "", $_SERVER["SCRIPT_NAME"]);
        $fullPath = $_SERVER['HTTP_HOST'] . $subfolders . $path;
        
        $fullPath = str_replace("\\", "/", $fullPath);
        $fullPath = str_replace("//", "/", $fullPath);

        return "http://" . $fullPath;
    }
}