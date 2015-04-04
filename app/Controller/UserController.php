<?php
App::uses('Controller', 'Controller');

class UserController extends AppController {
    public $helpers = array('Html', 'Form');

    public function index() {
        $this->User->recursive = 0;
        $this->set('users', $this->paginate());
    }


   public function login() {
    if ($this->request->is('post')) {
        if ($this->Auth->login()) {
            return $this->redirect($this->Auth->redirectUrl());
        }
        $this->Session->setFlash(__('Invalid username or password, try again'));
    }
}

public function logout() {
    return $this->redirect($this->Auth->logout());
}
}
?>