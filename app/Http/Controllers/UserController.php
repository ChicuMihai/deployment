<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users=User::get()->all();
        return view('deleteuser',compact('users'));

    }

    public function delete($id)
    {
        if(User::count()<=1){return redirect()->back();}
            else
        $users=User::find($id);
        $users->delete();
        return redirect()->back()->with('messsage','Succesuful deleted!');

    }
    public function edit($id){
        $user=User::find($id);
        return view('edituser',compact('user'));
    }
    public function update($id){
        $user=User::find($id);
        $this->validate(request(), [
         'name' => 'required|string|max:255',
         'email' => 'required|string|email|max:255|unique:users',
         'password' => 'required|string|min:6|confirmed',
      ]);
        $user->update(request()->all());
        $users=User::get()->all();
        return view('deleteuser',compact('users'));



    }


}
