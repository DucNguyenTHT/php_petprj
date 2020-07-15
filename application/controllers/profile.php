<?php
    class profile extends framework {
        public function __construct()
        {
            if(!$this->getSession('userId')){
                $this->redirect('accountController/loginForm');
            }
            $this->Helper('link');
        }
        public function index(){
            $this->View('profile');
        }
        public function logout(){
            $this->destroySession();
            $this->redirect('accountController/loginForm');
        }
    }
?>