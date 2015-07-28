<?php

class LoginController extends ControllerBase
{
    public function initialize()
    {
        $this->tag->setTitle('Login');
        parent::initialize();
    }
    
    public function indexAction()
    {
        
    }

    /**
     * This action authenticate and logs an user into the application
     *
     */
    public function startAction()
    {
        if ($this->request->isPost()) {

            $email = $this->request->getPost('email');
            $password = $this->request->getPost('password');

            $user = Users::findFirst(array(
                "(email = :email: OR username = :email:) AND password = :password: AND active = '1'",
                'bind' => array('email' => $email, 'password' => sha1($password))
            ));
            if ($user != false) {
                $this->auth->startSession($user);
                $this->flash->success('Welcome ' . $user->username);
                return $this->forward('products/index');
            }

            $this->flash->error('Wrong email/password');
        }

        return $this->forward('login/index');
    }

    /**
     * Finishes the active session redirecting to the index
     *
     * @return unknown
     */
    public function endAction()
    {
        $this->auth->finishSession();
        $this->flash->success('Goodbye!');
        return $this->forward('index/index');
    }
}

