<?php
class ModelEcomus
{
    public function __construct()
    {
        $db = mysqli_connect("localhost", "root", "", "ecomus");
        mysqli_set_charset($db, "utf8");
        $this->db = $db;
    }

    public function doLogin()
    {
        $query = "SELECT * 
            FROM user 
            WHERE email = '" . $_POST['email'] . "' AND password = '" . $_POST['password'] . "'";
        $result = mysqli_query($this->db, $query);
        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            return $row;
        }
        return false;
    }

    public function getDataUser()
    {
        $query = "SELECT * 
            FROM user 
            WHERE level = '1'";
        $listUser = mysqli_query($this->db, $query);
        return $listUser;
    }

    public function doRegister($name, $email, $phone, $password, $create)
    {
        $query = "INSERT INTO users (name, email, phone, password, level, created) values ('" . $name . "', '" . $email . "', '" . $phone . "', '" . $password . "','1', '" . $created . "' )";
        $result = mysqli_query($this->db, $query);
        return $result;
    }

    public function saveUser($iduser, $name, $email, $phone, $password, $created)
    {
        $stmt = $this->db->prepare("INSERT INTO users (iduser, name, email, phone, password, created) VALUES ('" . $name . "', '" . $email . "', '" . $phone . "', '" . $password . "','1', '" . $created . "' )");


        $stmt->bind_param("ssssss", $iduser, $name, $email, $phone, $password, $created);
        $result = mysqli_query($this->db, $stmt);


        return $result;
    }
}
?>