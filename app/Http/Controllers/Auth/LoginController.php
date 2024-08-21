<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    protected $redirectTo = '/profile'; // ここを確認

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->middleware('auth')->only('logout');
    }

    protected function authenticated(Request $request, $user)
    {
        Log::info('User authenticated: ' . $user->username);
        Log::info('Redirecting to: ' . $this->redirectTo);
        return redirect()->intended($this->redirectTo);
    }

    public function username()
    {
        return 'username';
    }

    protected function sendLoginResponse(Request $request)
    {
        $request->session()->regenerate();

        $this->clearLoginAttempts($request);

        Log::info('Login successful for user: ' . $request->input('username'));

        return $this->authenticated($request, $this->guard()->user())
                ?: redirect()->intended($this->redirectPath());
    }

    protected function sendFailedLoginResponse(Request $request)
    {
        Log::error('Login failed for user: ' . $request->input('username'));

        throw ValidationException::withMessages([
            $this->username() => [trans('auth.failed')],
        ]);
    }
}