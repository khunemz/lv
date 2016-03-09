<?php
namespace App;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AdminRepository implements AdminRepositoryInterface  {

    public function index(){
        return view('admin.index', ['msg' => 'I am m']);
    }


    /**
     * @param Request $request
     * @return mixed
     */
    public function signin(Request $request){

        return Auth::attempt([
            'email' => $request->email,
            'password' => $request->password
        ]);
    }

    public function signout(){
        return Auth::logout();
    }
}