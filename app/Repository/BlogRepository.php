<?php
namespace App;
use App\Http\Requests;

class BlogRepository implements BlogRepositoryInterface{
    	/**
    	 * Display a listing of the resource.
    	 * GET /orders
    	 *
    	 * @return Response
    	 */
    	public function getall()
    	{
    		return 'get blog return view blog.index';
    	}

    	/**
    	 * Show the form for creating a new resource.
    	 * GET /resource/create
    	 *
    	 * @return Response
    	 */
    	public function create()
    	{
    		return 'get blog\create return view blog.create';
    	}

    	/**
    	 * Store a newly created resource in storage.
    	 * POST /resource
    	 *
    	 * @return Response
    	 */
    	public function store()
    	{
    		return 'post blog return redirect blog.show with blog, msg';
    	}

    	/**
    	 * Display the specified resource.
    	 * GET /resource/{id}
    	 *
    	 * @param  int  $id
    	 * @return Response
    	 */
    	public function show($id)
    	{
    		return 'get blog {id} return redirect blog.show with blog';
    	}

    	/**
    	 * Show the form for editing the specified resource.
    	 * GET /resource/{id}/edit
    	 *
    	 * @param  int  $id
    	 * @return Response
    	 */
    	public function edit($id)
    	{
            return 'get blog {id) edit return redirect blog.show with blog';
    	}

    	/**
    	 * Update the specified resource in storage.
    	 * PUT /resource/{id}
    	 *
    	 * @param  int  $id
    	 * @return Response
    	 */
    	public function update($id)
    	{
    		return 'patch blog return redirect blog.show with blog ,msg';
    	}

    	/**
    	 * Remove the specified resource from storage.
    	 * DELETE /resource/{id}
    	 *
    	 * @param  int  $id
    	 * @return Response
    	 */
    	public function destroy($id)
    	{
    		return 'delete blog return redirect blog.index with msg';
    	}
}