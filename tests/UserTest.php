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
    public function postsignin_should_redirect_get(){
        $this->visit('/getsignin')
            ->press('Sign in')
            ->see('Get');
    }

    /** @test */
    public function getsignup_should_show(){
        $this->visit('/getsignup')
            ->see('Sign up');
    }


    public function teardown()
    {
        Mockery::close();
    }

}
