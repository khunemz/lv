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
			$blog = Blog::find($id);
            return view('blog.edit', ['blog'=> $blog ]);
    	}

    	/**
    	 * Update the specified resource in storage.
    	 * PUT /resource/{id}
    	 * and $id should follow Request $request
    	 * @param  int  $id
    	 * @return Response
    	 */
		public function update(Request $request, $id)
    	{
    		$blog = Blog::find($id);
			$blog->title = $request->title;
			$blog->body = $request->body;
			if($blog->save()):
				flash()->success('Updated');
				return redirect()->route('blog.show', ['blog' => $blog]);
			endif;
				flash()->warning('Something wrong please try again');
				return redirect()->back();
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
    		$blog=Blog::find($id);
			if($blog->delete()):
				flash()->success('Deleted');
				return redirect()->route('blog.index');
			endif;
				flash()->error('Cannot delete');
				return redirect()->back();

    	}
}