<?php

class UserController {

    public function actionRegister() {
        $name = '';
        $email = '';
        $password = '';
        $errors = false;
        $result = false;

        if(isset($_POST["submit"])) {

            $name = $_POST["name"];
            $email = $_POST["email"];
            $password = $_POST["password"];

            if(!User::checkName($name)) {
                if(!is_array($errors)) $errors = [];
                $errors[] = "Name should be longer than 2 characters";
            }

            if(!User::checkEmail($email)) {
                if(!is_array($errors)) $errors = [];
                $errors[] = "Incorrect email";
            }

            if(!User::checkPassword($password)) {
                if(!is_array($errors)) $errors = [];
                $errors[] = "Password should be longer than 5 characters";
            }

            if(User::checkEmailExists($email)) {
                if(!is_array($errors)) $errors = [];
                $errors[] = "User with this email is already registered. Try again";
            }

            if($errors == false) {
                $result = User::register($name, $email, $password);
            }



        }


        
        require_once(ROOT . '/views/user/register.php');

        return true;
    }



    public function actionLogin() {


        $email = '';
        $password = '';
        $errors = false;


        if(isset($_POST['submit'])) {


            $email = $_POST["email"];
            $password = $_POST["password"];

           
            $userId = User::checkUserData($email, $password);

            if(!$userId) {
                $errors[] = "Incorrect log in data";
            }
            else {

                User::auth($userId);

                header("location: /cabinet");

            }


        }





        require_once(ROOT . '/views/user/login.php');
        return true;
    }



    public function actionLogout() {
        unset($_SESSION["user"]);
        session_destroy();
        setcookie ("PHPSESSID", "", time() - 3600);

        header("location: /");

    }





}