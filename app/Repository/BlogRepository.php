<?php
namespace App;

use Illuminate\Http\Request;

class BlogRepository implements BlogRepositoryInterface{
    	/**
    	 * Display a listing of the resource.
    	 * GET /orders
    	 *
    	 * @return Response
    	 */
    	public function getall()
    	{
    		return view('blog.index', ['blogs'=>Blog::orderby('id','desc')->get()]);
    	}

    	/**
    	 * Show the form for creating a new resource.
    	 * GET /resource/create
    	 *
    	 * @return Response
    	 */
    	public function getcreate()
    	{
    		return view('blog.create');
    	}

    	/**
    	 * Store a newly created resource in storage.
    	 * POST /resource
    	 *
    	 * @return Response
    	 */
    	public function save(Request $request)
    	{
    		$blog = new Blog;
			$blog->title = $request->title;
			$blog->body = $request->body;
			if($blog->save()):
				flash()->success('Successfully posted');
				return redirect()->route('blog.show', ['blog' => $blog]);
			endif;
				flash()->warning('Cannot post, please try again');
				return redirect()->back();
    	}

    	/**
    	 * Display the specified resource.
    	 * GET /resource/{id}
    	 *
    	 * @param  int  $id
    	 * @return Response
    	 */
    	public function getById($id)
    	{
			$blog = Blog::find($id);
    		if($blog):
    			return view('blog.show', ['blog' => $blog]);
    		endif;
				flash()->message('Cannot show the blog.');
				return view('errors.404');
    	}

    	/**
    	 * Show the form for editing the specified resource.
    	 * GET /resource/{id}/edit
    	 *
    	 * @param  int  $id
    	 * @return Response
    	 */
    	public function getedit($id)
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
		public function update($id, Request $request)
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
    	public function delete($id)
    	{
    		return 'delete blog return redirect blog.index with msg';
    	}
}