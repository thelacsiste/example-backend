<?php namespace Mareck\Repositories;

use Mareck\User;

class UserRepository {

    /**
     * @param $userData
     * @return static
     */
    public function findByUsernameOrCreate($userData)
    {
        return User::firstOrCreate([
            'username' => $userData->name,
            'email'    => $userData->email,
            'avatar'   => $userData->avatar
        ]);
    }
} 