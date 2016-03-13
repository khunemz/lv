<?php

namespace App\Http\Controllers;

use App\AdminRepositoryInterface;
use Illuminate\Http\Request;
use App\Http\Requests;

class AdminController extends Controller
{
    protected  $_adminRepo;

    /**
     * @param AdminRepositoryInterface $adminRepo
     */
    public function __construct(AdminRepositoryInterface $adminRepo){
        $this->_adminRepo = $adminRepo;
        $this->middleware('Admin', ['only'=>['get']]);
    }

    /**
     * @return 'users'
     */
    public function get()
    {
        return $this->_adminRepo->get();
    }

    public function getsignin()
    {
        return $this->_adminRepo->getsignin();
    }

    public function getsignup()
    {
        return $this->_adminRepo->getsignup();
    }

    public function postsignin(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);
        return $this->_adminRepo->postsignin($request);
    }

    public function postsignup(Request $request)
    {   $this->validate($request, [
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6'
        ]);
        return $this->_adminRepo->postsignup($request);
    }

    public function getsignout()
    {
        return $this->_adminRepo->getsignout();
    }

}
