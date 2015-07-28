<?php

class IndexController extends ControllerBase
{
    public function initialize()
    {
        $this->tag->setTitle('Home page');
        parent::initialize();
    }
    
    public function indexAction()
    {

    }
}

