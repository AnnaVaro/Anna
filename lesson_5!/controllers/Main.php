<?php

require_once "lib/Controller.php";

class CtrlMain extends Controller {
    public function actionIndex () {
        echo "Main Index";
    }

    public function actionSave () {
        echo "Main Save";
    }
}
