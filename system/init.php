<?php
    spl_autoload_register(function($file){
        include ("classes/$file.php");
    });
    $rout = new rout;