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
    public function should_show_welcome()
    {
        $this->visit('/')->see('welcome');
    }

    /** @test **/
    public function should_see_signin(){
        $this->visit('/getsignin')
            ->see('Sign in');
    }

    /** @test **/
    // Try to access admin.index but middleware redirect back
    public function should_redirect_back(){
        $this->visit('/admin/index')
            ->seePageIs('/getsignin');
    }

    /** @test **/
    public function login_and_redirectTo_adminIndex(){
        $this->visit('/getsignin')
            ->type('1@m.com', 'email')
            ->type('123456' , 'password')
            ->press('Sign in')
            ->see('admin.index');
    }

    /** @test **/
    /* Passed */
//    public function post_signin_should_return(){
//        $this->visit('/postsignin')
//            ->see('This is m');
//    }

}
