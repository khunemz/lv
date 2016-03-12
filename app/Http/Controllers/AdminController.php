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
        //$this->middleware('Admin', ['except'=>['getsignin']]);
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



}
