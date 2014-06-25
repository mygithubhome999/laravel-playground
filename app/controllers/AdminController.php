<?php

class AdminController extends BaseController {

    /*
    |--------------------------------------------------------------------------
    | Booking Controller
    |--------------------------------------------------------------------------
    |
    | You may wish to use controllers instead of, or in addition to, Closure
    | based routes. That's great! Here is an example controller method to
    | get you started. To route to this controller, just add the route:
    |
    |   Route::get('/', 'SellerController@sellerLogin');
    |
    */

    public function adminLogin()
    {
        if(Auth::check())
            {
                return View::make('admin.home');
            } else {
                return View::make('admin.login');
            }
    }

    public function adminLoginCheck()
    {
        $username = Input::get('username');
        $password = Input::get('password');
        $user = Admin::where('username', '=', $username)
                        ->first();
        $user_with_password =  Admin::where('username', '=', $username)
                        ->where('password', '=', sha1($user['salt'].$password))
                        ->first();

        if ($user && $user_with_password)
            {
                Auth::login($user);
                return Redirect::route('adminHome');

            } else {
                return Redirect::route('login')
                ->with('flash_error', 'Your username/password combination was incorrect.'); 
            }
    }

    public function adminHome()
    {
        return View::make('admin.home');
    }

     public function adminLogout()
    {
        Auth::logout();
        return View::make('admin.login');
    }
}