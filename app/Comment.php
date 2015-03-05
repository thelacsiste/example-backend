<?php 

namespace Mareck;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model {

	 protected $fillable = ['author', 'text'];

}
