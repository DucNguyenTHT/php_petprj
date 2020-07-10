<?php
    class userModel extends database{
        // public function mydata(){
        //     $Fname = "NguyenHuuDuc";
        //     $email = "nguyenhuuduc110800@gmail.com";
        //     $pass = "TimeMagazine";
        //     $sql  = "INSERT INTO `users`(Fname,email,password) VALUES (?,?,?)";
        //     if($this->Query($sql,[$Fname,$email,$pass])){
        //         return true;
        //     }else{
        //         return false;
        //     }
        // }

        public function userSignup($fullname,$email,$pass){
            $sql = "INSERT INTO `users` (Fname,email,password) VALUES(?,?,?)";
            if($this->Query($sql,[$fullname,$email,$pass])){
                return true;
            }else{
                return false;
            }
        }
    }