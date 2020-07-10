<?php
    class userController extends framework{
        public function __construct()
        {
            $this->Helper("link");            
        }
        public function index(){
            $this->View("userView");
        }
        public function signup()
        {
            // $myModel = $this->Model("userModel");
            // if($myModel->mydata()){
            //     echo "User Has been register successfull";
            // }else{
            //     echo "have some ISSUE";
            // }
            // echo "form submitted";
            $userModel= $this->Model("userModel");
            $Fname = $this->input("Fname");
            $email = $this->input("email");
            $pass =$this->input("password");
            if($userModel->userSignup($Fname,$email,$pass)){
                echo "your account has been created ";
            }else {
                echo "have some issue";
            }
        }
    }