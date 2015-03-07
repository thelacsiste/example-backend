<?php namespace Mareck\Repositories;


interface CommentRepositoryInterface {

	public function get();

	public function create($datas);

	public function destroy($id);

}