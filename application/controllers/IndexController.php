<?php

class IndexController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {
        // action body
        // cria uma variável a ser mostrada na view
        $this->view->msg = 'Hello!';
        //$this->view->form = new Application_Form_Login;
    }
    public function albumAction()
    {
        // action body
        // cria uma variável a ser mostrada na view
        //$this->view->msg = 'Hello!';
        $this->view->form = new Application_Form_Album;
    }

    public function showAction() {

    }
    
}

