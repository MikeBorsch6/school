<?php

namespace App\Http\Controllers;
use Faker\Factory as Faker;
use App\Models\Course;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    public function index()
    {
        return User::all();
    }

    public function create()
    {
        //
    }

    public static function address()
    {
        $faker = Faker::create();
        $users=User::all();
        $users->each(function($x,$key) use($faker){
            $x->address = $faker->address;
            $x->save();
        });
    }

    public function store(Request $request)
    {
        if(isset(Auth::user()->role_id) && Auth::user()->role_id === 1)
        {
            User::create(
                [
                    'email' => $request->get('email_address'),
                    'email' => $request->get('email_address'),
                    'password' => Hash::make($request->get('password')),
                    'address'  => $request->get('street_address'),
                    'name' => "{$request->get('firstname')} {$request->get('lastname')}",
                    'role_id' => $request->get('role_id', '3')
                ]
            );
        }

        return redirect()->back();


    }

    public function show(User $user)
    {
        return $user;
    }

    public function edit(User $user)
    {
        return view('layouts.adminPageA', ['user' => $user]);
    }

    public function update(Request $request, User $user)
    {
        $user->update(
            [
                'name' => $request->name,
                'email' => $request->email,
                'address' => $request->address
            ]
        );

        return redirect(route('searchUser'));
    }

    public function destroy(User $user)
    {
        $user->delete();
    }

    public function teachers(User $user)
    {
        if($user->role_id === 2) {
            return $user->courses;
        }
    }

    public function resetPasswordView(User $user)
    {
        return view('layouts.passwordReset')->with(['user' => $user]);
    }

    public function resetPassword(Request $request, User $user)
    {
        $user->update(
            [
                'locked' => false,
                'password' => Hash::make($request->get('password'))
            ]
        );

        return redirect(route('searchUserP'));
    }

    public function transcript(User $user)
    {

    }
}
