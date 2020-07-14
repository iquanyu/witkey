<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Question extends Model
{
    public function user(){
		return $this->beLongsTo(User::class);
	}

	public function category(){
		return $this->beLongsTo(Category::class);
	}
}
