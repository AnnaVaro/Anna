<?php

require_once "lib/Controller.php";
require_once "models/user.php";

class CtrlAuth extends Controller {
    public function actionIndex () {
        echo $this->render('loginForm');
    }

    public function actionLogin () {
        $loginUser = User::Login($_POST['login'], $_POST['password']);
        if($loginUser) {
            $_SESSION["user"] = $loginUser;
            if(!empty($_GET['redirect'])) {
                header('Location: '.$_GET['redirect'],true, 301);
            }
        }
        else {
            echo $this->render('error', ['message' => 'Не верный логин или пароль!']);
        }
    }
}
