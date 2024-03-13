<?php
    require_once 'ModelEcomus.php';
    class ListUser extends ModelEcomus{
        public $tableName = 'user';
        public $columns = ['id_user', 'name', 'email', 'phone', 'password', 'address','created'];

    }
?>