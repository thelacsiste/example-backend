<?php namespace Mareck\Http\Controllers\Auth;

use Mareck\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

use Mareck\AuthenticateUser;
use Mareck\AuthenticateUserListener;


class AuthController extends Controller implements AuthenticateUserListener {

	/*
	|--------------------------------------------------------------------------
	| Registration & Login Controller
	|--------------------------------------------------------------------------
	|
	| This controller handles the registration of new users, as well as the
	| authentication of existing users. By default, this controller uses
	| a simple trait to add these behaviors. Why don't you explore it?
	|
	*/

	use AuthenticatesAndRegistersUsers;

	
	/**
     * @param AuthenticateUser $authenticateUser
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function login(AuthenticateUser $authenticateUser, Request $request)
    {
        $hasCode = $request->has('code');
        
        return $authenticateUser->execute($hasCode, $this);
    }
    
    /**
     * When a user has successfully been logged in...
     *
     * @param $user
     * @return \Illuminate\Routing\Redirector
     */
    public function userHasLoggedIn($user)
    {
        return redirect('/home');
    }

    


}
