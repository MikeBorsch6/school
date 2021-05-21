<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthenticatedSessionController extends Controller
{

    public function create()
    {
        return view('auth.login');
    }

    public function store(LoginRequest $request)
    {

        $request->authenticate();

        $request->session()->regenerate();

        if(Auth::user()->role_id == 1 )
        {
            return redirect(route('admin'));
        }
        elseif(Auth::user()->role_id == 2)
        {
            return redirect(route('FacultyView'));
        }
        elseif(Auth::user()->role_id == 3)
            {

            return redirect(route('StudentView'));
        }
        elseif(Auth::user()->role_id == 4)
        {

            return redirect(route('StudentView'));
        }
        elseif(Auth::user()->role_id == 5)
        {

            return redirect(route('StudentView'));
        }
        elseif(Auth::user()->role_id == 6)
        {

            return redirect(route('StudentView'));
        }
        elseif(Auth::user()->role_id == 7)
        {

            return redirect(route('StudentView'));
        }
        else{
            return redirect(route('ResearcherView'));
        }
    }

    public function destroy(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return view('auth.login'); /**when you log out, will take u back to login page */
    }
}
