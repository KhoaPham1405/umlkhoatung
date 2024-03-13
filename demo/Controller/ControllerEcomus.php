<?php
require_once "Models/ModelEcomus.php";
require_once "Views/ViewEcomus.php";
class ControllerEcomus
{
    var $modal, $view;
    public function __construct()
    {
        $this->view = new ViewEcomus();
        $this->model = new ModelEcomus();
    }
    public function getPageHome()
    {
        $this->view->getPageHome();
    }
    public function getPageLogin()
    {
        $this->view->getPageLogin();
    }
    public function doLogin()
    {
        $result = $this->model->doLogin();
        $_SESSION['id_user'] = $result['id_user'];
        $_SESSION['name'] = $result['name'];
        $_SESSION['email'] = $result['email'];
        $_SESSION['phone'] = $result['phone'];
        $_SESSION['address'] = $result['address'];
        $_SESSION['level'] = $result['level'];

        if ($result['level'] == 0) {
            header("location:index.php?task=pageuser");
        } elseif ($result['level'] == 1) {
            header("location:index.php?task=pagehome");
        }
    }

    public function doRegister($name, $email, $phone, $password, $create)
    {
        $result = $this->model->doRegister($name, $email, $phone, $password, $create);
        $message = "ban dang ki thanh cong";
        echo "<script type='text/javascript'>alert('$message');</script>";
        $this->view->getPageLogin();
    }
    public function getPageUser()
    {
        $listUser = $this->model->getDataUser();
        $this->view->getPageUser($listUser);
    }
    public function getPageRegister()
    {
        $this->view->getPageRegister();
    }
    public function removeUser()
    {
        $this->view->removeUser();
    }
    public function saveUser() {
        $iduser = $_POST['iduser'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $password = $_POST['password'];
        $created = $_POST['created'];

        $db = new mysqli("localhost", "username", "password", "database_name");
        if ($db->connect_error) {
            die("Connection failed: " . $db->connect_error);
        }

        $userModel = new UserModel($db);
        $result = $userModel->insertUser($iduser, $name, $email, $phone, $password, $created);

        if ($result) {
            // Lưu thành công, có thể điều hướng đến một trang khác hoặc hiển thị thông báo thành công
        } else {
            // Lưu không thành công, có thể hiển thị thông báo lỗi
        }

        $db->close();
    }
}
?>