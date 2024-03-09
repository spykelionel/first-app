<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view("users.index",  ["users"=>$users]);
    }
    public function create(){
        return view("users.create");
    }
    public function store(Request $req){
        $data = $req->validate([
            "name"=>"required",
            "email"=>'required',
            "password"=>"required"
        ]);
        $user = User::create($data);
        return redirect(route("users.index"));
   }
   public function edit(User $user){
        return view("users.edit", ['user'=>$user]);
   }
   public function update(User $user, Request $req){
        $data = $req->validate([
            "name"=>"required",
            "email"=>'required',
        ]);
        
        $user->update($data);
        return redirect(route("users.index"))->with("success", "User $user->name has updated succesfully");
    }

    public function delete(User $user){
        $user->delete();
        return redirect(route("users.index"))->with("success", "User $user->name has been deleted succesfully");
    }
}
