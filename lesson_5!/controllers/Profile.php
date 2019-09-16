<?php

require_once "lib/Controller.php";

class CtrlProfile extends Controller {
    public function actionIndex () {
        echo "Profile Index";
    }

    public function actionSave () {
        echo "Profile Save";
    }
}
