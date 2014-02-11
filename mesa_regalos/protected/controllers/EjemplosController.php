<?php

class EjemplosController extends Controller{
    
    public function actionIndex(){
        
        $this->render('index');
    }
    
    public function actionCreate(){
        
        $this->render('create');
    }
}


?>