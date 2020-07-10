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
    }