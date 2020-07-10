<?php
    class framework{
        public function View($viewfile, $data = []){
            if(file_exists("../application/views/$viewfile.php")){
                require_once "../application/views/$viewfile.php";
            }
            else{
                echo "$viewfile.php not found<br>";
            }
        }

        public function Model($modelfile){
            if(file_exists("../application/models/$modelfile.php")){
                require_once "../application/models/$modelfile.php";
                return new $modelfile;
            }else{
                echo "$modelfile.php not found<br>";
            }
        }

        public function input($inputName){
            if($_SERVER['REQUEST_METHOD']=="POST"||$_SERVER['REQUEST_METHOD']=="post"){
                return trim($_POST[$inputName]);
            }else if($_SERVER['REQUEST_METHOD']=="GET"||$_SERVER['REQUEST_METHOD']=="get"){
                return trim($_GET[$inputName]);
            }
        }

        public function Helper($helperfile){
            if(file_exists("../system/helpers/$helperfile.php")){
                require_once "../system/helpers/$helperfile.php";
            }else{
                echo "$helperfile.php not found<br>";
            }
        }
    }