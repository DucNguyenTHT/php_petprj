<?php
    function linkCSS($cssPath){
        $url = BASE.$cssPath;
        echo "<link rel=\"stylesheet\" href=\"$url\">";
    }

    function linkJS($jsPath){
        $url = BASE.$jsPath;
        echo "<script src=\"$url\"></script>";
    }