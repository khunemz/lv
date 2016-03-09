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

    //GET: admin/index
    public function getindex(){
        return $this->_adminRepo->index();
    }
    //GET: getsignin
    public function getsignin(){
        return view('admin.signin');
    }
    //POST: postsignin
    public function postsignin(Request $request){

        if($this->_adminRepo->signin($request)):
            return redirect()->route('admin.index');
        endif;

        return redirect()->route('admin.getsignin');
    }

    //GET: getsignout
    public function getsignout(){
        if($this->_adminRepo->signout()):
            return redirect()->route('admin.getsignin');
        endif;
        return redirect()->route('admin.index');
    }



}
