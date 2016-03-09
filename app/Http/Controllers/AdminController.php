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
    }

    public function getdashboard(){
        return view('admin.dashboard');
    }

    public function getsignin(){

        return view('admin.signin');

    }

    public function postsignin(Request $request){

        return $this->_adminRepo->signin();
    }

}
