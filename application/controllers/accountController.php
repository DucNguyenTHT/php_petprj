<?php
    class accountController extends framework{
        public function __construct()
        {
            $this->Helper("link");
            $this->accountModel = $this->Model('accountModel');
        }   
        public function index(){
            $this->View("signup");
        }

        public function loginForm(){
            $this->View("login");
        }

        public function createAccount(){
            $userData = [
                'fullName'     => $this->input('Fname'),
                'email'        => $this->input('email'),
                'password'     => $this->input('password'),
                'fullNameErro' => '',
                'emailErro'    => '',
                'passwordErro' => '',
            ];

            if(empty($userData['fullName'])){
                $userData['fullNameErro'] = 'Fullname is required';
            }

            if(empty($userData['email'])){
                $userData['emailErro'] = 'Email is required';
            }else{
                if(!$this->accountModel->checkemail($userData['email'])){
                    $userData['emailErro'] = 'sorry this email is already exist';
                }
            }

            if(empty($userData['password'])){
                $userData['passwordErro'] = 'Password is required';
            }else if(strlen($userData['password'])<5){
                $userData['passwordErro'] = 'Password must have more than 5 character';
            }

            if(empty($userData['fullNameErro']) && empty($userData['emailErro']) && empty($userData['passwordErro'])){
                $pass = password_hash($userData['password'],PASSWORD_DEFAULT);
                $data = [$userData['fullName'],$userData['email'],$pass];
                if($this->accountModel->createAccount($data)){
                    $this->setFlash('accountCreated','your account have been created succcess');
                    $this->setSession('userID',6);
                    // $this->loginForm();
                    $this->redirect("accountController/loginForm");
                }else{
                    echo 'Have some issue';
                }
            }else{
                $this->view('signup',$userData);
            }

        }
    }