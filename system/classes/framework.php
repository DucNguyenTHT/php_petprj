<?php
    error_reporting(0);
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
                return trim(strip_tags($_POST[$inputName]));
            }else if($_SERVER['REQUEST_METHOD']=="GET"||$_SERVER['REQUEST_METHOD']=="get"){
                return trim(strip_tags($_GET[$inputName]));
            }
        }

        public function Helper($helperfile){
            if(file_exists("../system/helpers/$helperfile.php")){
                require_once "../system/helpers/$helperfile.php";
            }else{
                echo "$helperfile.php not found<br>";
            }
        }

        public function setSession($sessionName, $sessionValue){
            if(!empty($sessionName) && !empty($sessionValue)){
                $_SESSION[$sessionName] = $sessionValue;
            }
        }

        public function getSession($sessionName){
            if(!empty($sessionName)){
                return $_SESSION[$sessionName];
            }
        }

        public function unsetSession($sessionName){
            if(!empty($sessionName)){
                unset($_SESSION[$sessionName]);
            }
        }

        public function destroySession(){
            session_destroy();
        }

        public function setFlash($sessionName,$msg){
            if(!empty($sessionName) && !empty($msg)){
                $_SESSION[$sessionName] = $msg;
            }
        }

        public function flash($sessionName,$className){
            if(!empty($sessionName) && !empty($className)){
                $msg = $_SESSION[$sessionName];
                echo "<div class=\" $className \">{$msg}</div>";
                unset($_SESSION[$sessionName]);
            }
        }

        public function redirect($path){
            header("location:".BASE."/".$path);
        }
    }