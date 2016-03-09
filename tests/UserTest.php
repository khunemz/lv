<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class UserTest extends TestCase
{
    /**
     * A basic test example.
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
}
