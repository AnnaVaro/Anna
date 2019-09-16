<?php

require_once "lib/Controller.php";

class CtrlProfile extends Controller {

    public function beforeAction ($params) {
        return !empty($_SESSION['user']);
    }

    public function actionIndex () {
        echo $this->render('profile', ["user" => $_SESSION['user']]);
    }

}
