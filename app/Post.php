<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
	// it's will fill into database by using fill() function.
	protected $fillable = ['id', 'title', 'body', 'created_at', 'updated_at'];
    protected $table = 'posts';
}
