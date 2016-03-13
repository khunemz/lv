<?php
namespace App;

use Illuminate\Http\Request;

interface AdminRepositoryInterface {
    public function get();
    public function getsignin();
    public function getsignup();
    public function postsignin(Request $request);
    public function postsignup(Request $request);
    public function getsignout();
}