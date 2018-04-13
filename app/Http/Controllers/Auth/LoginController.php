<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Auth\LoginProxy;
use App\Auth\Requests\LoginRequest;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    private $loginProxy;

    public function __construct(LoginProxy $loginProxy)
    {
        $this->loginProxy = $loginProxy;
    }

    public function login(LoginRequest $request)
    {
        $email = $request->get('email');
        $password = $request->get('password');

        return $this->loginProxy->attemptLogin($email, $password);
    }

    public function refresh(Request $request)
    {
        return $this->loginProxy->attemptRefresh();
    }

    public function logout(Request $request)
    {
        $this->loginProxy->logout();
    }
}
