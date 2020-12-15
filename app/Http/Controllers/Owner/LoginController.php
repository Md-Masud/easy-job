<?php

namespace App\Http\Controllers\Owner;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\frontend\Owner;
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
    protected $redirectTo = RouteServiceProvider::OWNER_DASHBOARD;

    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function __construct()
    {
        // $this->middleware('guest')->except('logout');
        $this->middleware('guest:owner')->except('ownerlogout');

    }

    public function showOwnerLoginForm()
    {
        return view('frontend.owner.page.ownerlogin', ['url' => 'ownerlogin']);
    }

    public function adminLogin(Request $request)
    {
        $this->validate($request, [
            'email'   => 'required|email',
            'password' => 'required|min:8'
        ]);

        if (Auth::guard('owner')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {
            return redirect()->Route('admin.index');
        }
        $this->setErrorMessage('invalid password');
        return back()->withInput($request->only('email', 'remember'));
    }


}
