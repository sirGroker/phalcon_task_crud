<?php
use Phalcon\Mvc\User\Component;

class Auth extends Component
{
    /**
     * Register an authenticated user into session data
     *
     * @param Users $user
     */
    public function startSession(Users $user)
    {
        $this->session->set('auth', array(
            'id' => $user->id,
            'name' => $user->username
        ));
    }

    /**
     * Finishes the active session redirecting to the index
     *
     * @return unknown
     */
    public function finishSession()
    {
        $this->session->remove('auth');
    }
}
