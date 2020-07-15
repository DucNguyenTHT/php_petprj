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

        public function userlogin($email,$password){
            $sql = 'SELECT * from `users` where email = ?';
            if($this->Query($sql,[$email])){
                if($this->rowCount() > 0){
                    $row = $this->fetch();
                    $dbPassword = $row->password;
                    $userId = $row->id;
                    if(password_verify($password,$dbPassword)){
                        return ['status' => 'ok','data'=> $userId];
                    }else{
                        return ['status'=> 'passwordNotMacthed'];
                    }
                }else {
                    return ['status' => 'emailNotFound'];
                }
            }
        }
    }