<?php
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\Models\LoginUser;
use Illuminate\Support\Facades\Auth;
use Langs;

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
    public $redirectTo = 'home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
 
        $request->session()->regenerateToken();

        return redirect()->back();
    }

    protected function authenticated(Request $request, $user)
    {
        return redirect(route('home'));
    }   

    public function showLoginForm()
    {
        $errorMessage = Langs::langs('You must sign in','Vous devez vous connecter');
        return redirect(Langs::langs(route('home'),route('home-fr')))->with('error', $errorMessage);
    }


    public function doLogin(Request $request)
    {

        // create our user data for the authentication
        $userdata = array(
          'email' => $request->input('email') ,
          'password' => $request->input('password')
        );

        // attempt to do the login
        if (Auth::attempt($userdata))
        {
            // echo 'logged in';
                // validation successful
                // do whatever you want on success
        }
        else
        {
            echo 'Failed';
            // validation not successful, send back to form
            // return Redirect::to('');

        }
    }

}

// if (Auth::attempt(['email' => $email, 'password' => $password, 'active' => 1])) {
//     // Authentication was successful...
// }