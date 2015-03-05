<?php namespace Mareck\Http\Controllers;

use Mareck\Http\Requests;
use Mareck\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

use Mareck\Comment as Comment;

class CommentController extends Controller {

    /**
     * [$comment CommentRepo]
     * @var [Comment]
     */
    protected $comment;

    /**
     * [__construct]
     * @param Comment $comment [CommentRepo]
     */
    public function __construct(Comment $comment)
    {
        $this->comment = $comment;
    }

    /**
     * Send back all comments as JSON
     *
     * @return Response
     */
    public function index()
    {
        return response()->json($this->comment->get());
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
    	$this->comment->create([
			'author' =>  $request->input('author'),
			'text'   =>  nl2br($request->input('text'))
        ]);

        return response()->json(array('success' => true));
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $this->comment->destroy($id);
    
        return response()->json(array('success' => true));
    }
}
