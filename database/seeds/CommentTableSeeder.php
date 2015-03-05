<?php 

use Illuminate\Database\Seeder;
use Mareck\Comment as Comment;

class CommentTableSeeder extends Seeder {

    public function run()
    {
        Comment::truncate(); 
    
        Comment::create(array(
            'author' => 'Chris Sevilleja',
            'text' => 'Look I am a test comment.'
        ));
    
        Comment::create(array(
            'author' => 'Nick Cerminara',
            'text' => 'This is going to be super crazy.'
        ));
    
        Comment::create(array(
            'author' => 'Holly Lloyd',
            'text' => 'I am a master of Laravel and Angular.'
        ));
    }    

}