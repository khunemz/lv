<?php
namespace App;

use Illuminate\Http\Request;

interface AdminRepositoryInterface {
    public function index();
    public function signin(Request $request);
}