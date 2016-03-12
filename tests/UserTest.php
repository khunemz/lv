<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class UserTest extends TestCase
{
    /**
     * Test of AdminController
     *
     * @return void
     *
    /** @test **/
    public function get_should_see_data(){
        $this->visit('/admin')
            ->see('khunemz');
    }

    /** @test **/
    public function getsignin_should_see_getsignin(){
        $this->visit('/getsignin')
            ->see('Please Sign in');
    }

    /** @test **/

    // Try to access admin.index but middleware redirect back
    public function should_redirect_back(){
        $this->visit('/admin/index')
            ->seePageIs('/getsignin');
    }

    /** @test **/
    /* Green */
    public function login_and_redirectTo_adminIndex(){
        $this->visit('/getsignin')
            ->type('2@m.com', 'email')
            ->type('123456' , 'password')
            ->press('Sign in')
            ->see('admin.index');
    }

    /** @test **/
    /* Green */
//    public function post_signin_should_return(){
//        $this->visit('/postsignin')
//            ->see('This is m');
//    }

    /** @test */
    public function signout_should_redirect(){
        $this->visit('/getsignin')
            ->type('1@m.com', 'email')
            ->type('123456' , 'password')
            ->press('Sign in')
            ->visit('http://localhost:8000/getsignout')
            ->see('Sign in'); //on /getsignin
    }


}
