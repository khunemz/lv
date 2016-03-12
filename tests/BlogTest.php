<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class BlogTest extends TestCase
{
    /**
     * Test BlogController & BlogRepository
     *
     * @return void
     */
    /** @test **/
    public function index_should_retrieve_data()
    {
        $this->visit('/blog')
            ->see('get blog return view blog.index');
    }
}
