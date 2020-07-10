<?php
    class userController extends framework{
        public function index(){

        }
        public function userMethod()
        {
            $myModel = $this->Model("userModel");
            if($myModel->mydata()){
                echo "User Has been register successfull";
            }else{
                echo "have some ISSUE";
            }
        }
    }