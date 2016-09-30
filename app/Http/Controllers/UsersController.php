<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Users;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    /**
    *
    * Return all users
    *
    * @return [Object] of users
    *
    */
   
    public function index()
    {
        $users = DB::table('users')->get();

        return $users;
    }

    /**
    *
    * Store a new user to Database
    *
    * @param Request $request
    * @return void
    *
    */

    public function create(Request $request)
    {
        $user = new Users;

        $user->firstName = $request->input('firstName');

        $user->lastName  = $request->input('lastName');

        $user->save();
    }

    /**
    *
    * Edit an existing user
    *
    * @param Request $request,int $id
    * @return $users
    *
    */

    public function edit(Request $request,$id) 
    {
        $user = Users::find($id);

        $user->firstName = $request->input('firstName');

        $user->lastName  = $request->input('lastName');

        $user->save();
    }

    /**
    *
    * Delete a user with a matching id
    *
    * @param int $id
    * @return void
    *
    */

    public function destroy($id)
    {
       $user = Users::find($id);

       $user->delete();
    }
}
