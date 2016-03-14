<?php
namespace App;

use Illuminate\Http\Request;

interface BlogRepositoryInterface {

	public function getall();
	public function getcreate();
	public function save(Request $request);
	public function getById($id);
	public function getedit($id);
	public function update(Request $request, $id);
	public function delete($id);

}