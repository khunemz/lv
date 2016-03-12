<?php
namespace App;

use App\Http\Requests\Request;

interface BlogRepositoryInterface {

	public function getall();
	public function getcreate();
	public function save(Request $request);
	public function getById($id);
	public function getedit($id);
	public function patchupdate($id, Request $request);
	public function delete($id);

}