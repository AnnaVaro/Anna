<?php

require_once "lib/Controller.php";

class CtrlMain extends Controller {
    public function actionIndex () {
        echo $this->render('main');
    }
}
