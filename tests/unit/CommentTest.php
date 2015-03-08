<?php

class CommentTest extends \Codeception\TestCase\Test
{
    /**
     * @var \UnitTester
     */
    protected $tester;

    protected $comment_id; 

    protected function _before()
    {
        $this->comment_id = $this->tester->haveRecord('comments', [
            'author' => 'John',
            'text' => 'blabla',
            'created_at' => new Datetime,
            'updated_at' => new Datetime,
        ]);
    }

    protected function _after()
    {
    }

    public function testExistComment()
    {
        $comment = $this->tester->grabRecord('comments', [
            'id' => $this->comment_id
        ]);

        $this->assertTrue($comment->author == 'John');

        $this->tester->seeRecord('comments', [
            'id'   => $this->comment_id,
            'text' => 'blabla'
         ]);
    }

    public function testDontExistComment()
    {
        $comment = $this->tester->grabRecord('comments', [
            'id' => $this->comment_id
        ]);
               
        $this->assertFalse($comment->author == 'truc');
        
        $this->tester->dontSeeRecord('comments', [
            'id'   => $this->comment_id,
            'text' => 'truc'
         ]);
    }
}