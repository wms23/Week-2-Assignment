<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ToDoList extends Model
{
    //
    protected $fillable = ['title', 'user_id'];


    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
