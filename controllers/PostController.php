<?php

namespace app\controllers;

/**
 * Description of PostController
 *
 * @author МонтД
 */
class PostController extends AppController{
    
    public function actionIndex($name = 'Гость') {
        $hello = 'Привет, мир!';
        $hi = 'Hi!';
        return $this->render('index', compact('hello', 'hi', 'name'));
    }

    public function actionTest() {
        return $this->render('test');
    }
    
    public function actionHello() {
        return $this->render('Hello');
    }
}
