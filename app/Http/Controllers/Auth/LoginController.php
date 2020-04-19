<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Socialite;
use Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    //改用username進行登入
    public function username()
    {
        return 'username';
    }

    public function redirectToProvider($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    /**
     * 從登入提供者處得到使用者資訊.
     *
     * @return \Illuminate\Http\Response
     */
    public function handleProviderCallback($provider)
    {
        //透過供應器來取得用戶
        $user = Socialite::driver($provider)->user();
        //透過用戶和供應器來尋找或建立用戶
        $authUser = $this->findOrCreateUser($user, $provider);
        //進行登入並開啟記得我
        Auth::login($authUser, true);
    }

    /**假如通過登入提供者驗證後發現使用者已經註冊過，就取得該使用者Record，否則就自動進行簡易註冊動作
     * If a user has registered before using social auth, return the user
     * else, create a new user object.
     * @param  $user Socialite user object
     * @param $provider Social auth provider
     * @return  User
     */
    public function findOrCreateUser($user, $provider)
    {
        $authUser = \App\User::where('provider_id', $user->id)->first();
        if (!$authUser) {
            //可能已經用其他管道註冊過
            $authUser = \App\User::where('email', $user->email)->first();
            if($authUser){
                $authUser->provider = $provider;
                $authUser->provider_id = $user->id;
                $authUser->role_id = 2;
                $authUser->save();
            }
        }

        if ($authUser) {
            return $authUser;
        }else{
            $data = [
            'name'     => $user->name,
            'email'    => $user->email,
            'avatar'      => $user->getAvatar(),
            'provider' => $provider,
            'provider_id' => $user->id,
            ];
            if (strtolower($provider) == 'facebook') {
                $data['fb_id'] = $user->id;
            }
            return \App\User::create($data);
        }
    }
}
