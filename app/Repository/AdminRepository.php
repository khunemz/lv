<?php
namespace App;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AdminRepository implements AdminRepositoryInterface  {

    public function get(){
        $users = User::all();
        return view('admin.get', ['users' => $users]);
    }

    public function getsignin()
    {
        return view('admin.getsignin');
    }

    public function postsignin(Request $request){
        return 'posted';
    }

    public function getsignout(){
        return 'loggedout';
   }

}


