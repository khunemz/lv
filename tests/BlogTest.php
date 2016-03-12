<?php
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Mockery;

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
    /** @test **/
    public function create_should_retrieve_data(){
        $this->visit('/blog/create')
            ->see('get blog/create return view blog.create');
    }
    /** @test **/
    public function save_should_insert_and_return_to_show(){
        $this->post('/blog', ['something'])
            ->see('post blog return redirect blog.show with blog, msg');
    }
    /** @test */
    public function show_should_return_sth(){
        $param = rand(2,99);
        $this->visit('/blog/'.$param)
            ->see('get blog {id} return redirect blog.show with blog');
    }


    /** @test */
    public function tearDown(){
        Mockery::close();
    }
}
