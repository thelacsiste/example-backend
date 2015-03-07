<?php namespace Mareck\Repositories;

use Mareck\Comment as Comment;

class DbCommentRepository implements CommentRepositoryInterface {

	/**
	 * [$comment Comment]
	 * @var [Model]
	 */
	protected $comment;

	/**
	 * [__construct]
	 * @param Comment $comment [Model]
	 */
	public function __construct(Comment $comment)
	{
		$this->comment = $comment;
	}

	/**
	 * [get Retourne la liste des commentaires en BDD]
	 * @return [type] [description]
	 */
	public function get()
	{
		return $this->comment->get();
	}

	/**
	 * [create description]
	 * @param  [type] $datas [description]
	 * @return [type]        [description]
	 */
	public function create($datas)
	{
		return $this->comment->create($datas);

	}

	/**
	 * [destroy description]
	 * @param  [type] $id [description]
	 * @return [type]     [description]
	 */
	public function destroy($id)
	{
		return $this->comment->destroy($id);
	}

}
