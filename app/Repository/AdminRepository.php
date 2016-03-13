<?php
namespace App;

use Illuminate\Foundation\Auth\User;
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

    public function getsignup()
    {
        return view('admin.getsignup');
    }

    public function postsignin(Request $request)
    {
        $remember = $request->has('remember') ? true : false;
        if(Auth::attempt([
            'email' => $request->email,
            'password' => $request->password
        ], $remember)):
            return redirect()->intended('/admin');
        endif;
            return redirect()->back();
    }

    public function postsignup(Request $request)
    {
        $user = new User;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->name = $request->name;
        if($user->save()):
            if(Auth::login($user)):
                return redirect()->intended('/admin');
            endif;
                return redirect()->route('admin.getsignin');
        endif;
        return redirect()->back();
    }
    public function getsignout(){
        Auth::logout();
        return redirect()->route('admin.getsignin');
   }

}


