<?php

use Mareck\Comment as Comment;

class CommentTest extends \Codeception\TestCase\Test
{
    /**
     * @var \UnitTester
     */
    protected $tester;

    protected $comment_id; 

    protected function _before()
    {
        // preparing a user, inserting user record to database
        $this->comment_id = $this->tester->haveRecord('comments', [
            'author' => 'John',
            'text' => 'blabla',
        ]);
    }

    protected function _after()
    {
    }

    // tests
    public function testMe()
    {
        $comment = Comment::find($this->comment_id);
        
        $this->assertFalse($comment->author == 'truc');
        $this->assertTrue($comment->author == 'John');

        $this->tester->dontSeeRecord('comments', [
            'id'   => $this->comment_id,
            'text' => 'truc'
         ]);

        $this->tester->seeRecord('comments', [
            'id'   => $this->comment_id,
            'text' => 'blabla'
         ]);
    }
}