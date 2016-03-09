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
        $this->middleware('Admin', ['except'=>['getsignin']]);
    }

    public function getindex(){
        return $this->_adminRepo->index();
    }

    public function getsignin(){
        return view('admin.signin');
    }

    public function postsignin(Request $request){

        if($this->_adminRepo->signin($request)):
            return redirect()->route('admin.index');
        endif;

        return redirect()->route('admin.getsignin');
    }



}
