<?php

namespace App\Http\Controllers;
use Faker\Factory as Faker;
use App\Models\Course;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


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
                $request
            );
        }
        else {
            dd('not a user');
        }
    }

    public function show(User $user)
    {
        return $user;
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, User $user)
    {
        $user->update(
            $request
        );
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
}
