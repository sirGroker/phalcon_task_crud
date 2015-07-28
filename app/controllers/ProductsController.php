<?php

class ProductsController extends ControllerBase
{
    public function initialize()
    {
        $this->tag->setTitle('Products');
        parent::initialize();
    }
    
    public function indexAction(){
        
    }
}
