<?php
namespace App;

use App\Http\Requests\Request;
use App\Http\Requests;

interface AdminRepositoryInterface {
    public function signin(Request $request);
}