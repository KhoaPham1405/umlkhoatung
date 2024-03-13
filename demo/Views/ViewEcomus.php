<?php
    class ViewEcomus{
        public function getPageHome(){
            include_once "Templates/home.php";
        }
        public function getPageLogin(){
            include_once "Templates/formlogin.php";
        }
        public function getPageUser($listUser){
            include_once "Templates/pageuser.php";
        }
        public function getPageRegister(){
            include_once "Templates/formregister.php";
        }
    }
?>