<?php
    require_once "Controller/ControllerEcomus.php";
    session_start();
    $ControllEcomus = new ControllerEcomus();

    $task = isset($_GET['task'])?$_GET['task']:null;

    // login

    $name = isset($_POST['name'])? $_POST['name']:null;
    $email = isset($_POST['email'])? $_POST['email']:null;
    $phone = isset($_POST['phone'])? $_POST['phone']:null;
    $address = isset($_POST['address'])? $_POST['address']:null;
    $password = isset($_POST['password'])? $_POST['password']:null;
    $repassword = isset($_POST['repassword'])? $_POST['repassword']:null;
    $create = date("Y.m.d");

    if (isset($_POST['login'])) {
        $ControllEcomus->doLogin();
    }
    
    if (isset($_POST['register'])) {
        if(empty($name) ||
            empty($email) ||
            empty($phone) ||
            empty($password)||
            empty($repassword)) {
                $message = "khong duoc de trong";
                echo"<script type='text/javascript'>alert('$message');</script>";
        }elseif($password != $repassword){
                $message = "mat khau khong trung nhau";
                echo"<script type='text/javascript'>alert('$message');</script>";
        }elseif(isset($name) && isset($email) && isset($phone) && isset($password) && isset($repassword)){
            $ControllEcomus->doRegister($name, $email, $phone, $password, $created);
        }
    }

    switch ($task) {
        case 'pagehome':
            $ControllEcomus->getPageHome();
            break;
        case 'pagelogin':
            $ControllEcomus->getPageLogin();
            break;
        case 'pageuser':
            $ControllEcomus->getPageUser();
            break;
        case 'pageregister':
            $ControllEcomus->getPageRegister();
            break;
        case 'deleteuser&iduser':
            $ControllEcomus->removeUser();
            break;
        case 'saveuser':
            $ControllEcomus->saveUser();
            break;
            
        default:
            $ControllEcomus->getPageHome();
            break;
    }
?>