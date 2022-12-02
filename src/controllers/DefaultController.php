<?php
require_once 'AppController.php';

class DefaultController extends AppController{

    public function index(){
        $this->render('login', ['message' => "halko"]);
    }

    public function timer(){

        $this->render('timer');
    }

    public function toDoList(){

        $this->render('todolist');
    }

    public function statistics(){
        
        $this->render('statistics');
    }

    public function achivments(){
        $this->render('achivments');
    }


}