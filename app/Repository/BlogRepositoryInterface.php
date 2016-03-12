<?php
namespace App;

interface BlogRepositoryInterface {

	public function getall();
	public function getcreate();
	public function save();
	public function getById($id);
	public function edit($id);
	public function update($id);
	public function destroy($id);

}