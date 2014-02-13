<?php

class AdminpanelController extends Controller {

    public $layout = '//layouts/admin';

    public function actionIndex() {
        
        $this->render('index');
    }

    public function actionCreate() {

        $this->render('create');
    }

    public function actionForms() {

        $this->render('forms');
    }

}
?>
