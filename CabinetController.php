<?php

class CabinetController {

    public function actionIndex() {

        $userId = User::checkLogged();

        $user = User::getUserById($userId);

        require_once(ROOT . './views/cabinet/index.php');
        return true;
    }


    public function actionEdit() {


        $userId = User::checkLogged();
        
        $user = User::getUserById($userId);

        $name = $user["name"];
        $password = $user["password"];

        $errors = false;
        $result = false;

        if(isset($_POST["submit"])) {
            $name = $_POST["name"];
            $password = $_POST["password"];

            if(!User::checkName($name)) {
                $errors[] = "Name should be longer than 2 characters";
            }

            if(!User::checkPassword($password)) {
                $errors[] = "Password should be longer than 5 characters";
            }

            if($errors == false) {
                $result = User::edit($userId, $name, $password);
            }

        }

    

        require_once(ROOT . './views/cabinet/edit.php');
        return true;
    }

    public function actionHistory() {

        $userId = User::checkLogged();

        $ordersList = Order::getOrdersByUserId($_SESSION['user']);

        require_once(ROOT . './views/cabinet/history.php');
        return true;
    }

}