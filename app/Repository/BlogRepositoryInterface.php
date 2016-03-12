<?php
namespace App;

interface BlogRepositoryInterface {

	public function getall();
	public function getcreate();
	public function store();
	public function show($id);
	public function edit($id);
	public function update($id);
	public function destroy($id);

}