<?php
namespace App;

use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Request;
use App\Http\Controllers;

class AdminRepository implements AdminRepositoryInterface  {
    public function signin(Request $request){
        $this->validate($request, [
            'email' => 'required|email|max:255',
            'password' => 'required|min:6'
        ]);

        return Auth::attempt([
            'email' => $request->email,
            'password' => $request->password
        ]);
    }
}