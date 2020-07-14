<?php
    class accountModel extends database{
        public function checkemail($email){
            $sql = 'SELECT email FROM `users` WHERE email = ?';
            if($this->Query($sql,[$email])){
                if($this->rowCount() > 0){
                    return false;
                }else{
                    return true;
                }
            }
        }

        public function createAccount($data){
            $sql = 'INSERT INTO `users` (Fname,email,password) VALUES(?,?,?)';
            if($this->Query($sql,$data)){
                return true;
            }else{
                return false;
            }
        }
    }