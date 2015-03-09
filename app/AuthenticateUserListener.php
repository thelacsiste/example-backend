<?php namespace Mareck;


interface AuthenticateUserListener {

    /**
     * @param $user
     * @return mixed
     */
    public function userHasLoggedIn($user);
    
}