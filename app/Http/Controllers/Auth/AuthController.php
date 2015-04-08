<?php namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Http\Requests\Auth\RegisterRequest;
use App\User;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\HttpFoundation\Response;
//use Symfony\Component\Security\Core\User\User;

class AuthController extends Controller {

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
	 * Create a new authentication controller instance.
	 *
	 * @param  Guard  $auth
	 * @param  User   $user
	 * @return void
	 */
	public function __construct(Guard $auth, User $user)
	{
		$this->auth = $auth;
		$this->user = $user;

		$this->middleware('guest', ['except' => 'getLogout']);
	}
    
    /**
     * Handle for printing the registration form.
     * 
     * @return Response
     */
    public function getRegister() {
        return view('auth/register');
    }
    
    /**
     * Handle for printing the login form
     * 
     * @return Response
     */
    public function getLogin() {
        return view('auth/login');
    }
    
    /**
     * Handle for processing a submitted registration form
     * 
     * @param Request $request
     */
    public function postRegister(RegisterRequest $request) {
        //Registering the user
        $this->user->setUsername($request->username);
        $this->user->setEmail($request->email);
        $this->user->setPassword(Hash::make($request->password));
        $this->user->save(); //Insert into the database
        
        return redirect('/');
    }
    
    /**
     * Handle for processing a submitted login form
     * 
     * @param Request $request
     */
    public function postLogin(LoginRequest $request) {
        //Attempt to log the user in
        if($this->auth->attempt(array(
                'username' => $request->input('username'), 
                'password' => $request->input('password')
        ))) {
            return redirect('/'); //If successful, redirect to home page
        }
        
        //Redirect to login screen if the attempt fails.
        return redirect('auth/login')->withErrors(array(
           'username' => 'There was an error. Please check your username or password and try again.' 
        ));
    }
    
    /**
     * Log the user out.
     * 
     * @return Response
     */
    public function getLogout() {
        $this->auth->logout();
        
        return redirect('/');
    }
}
