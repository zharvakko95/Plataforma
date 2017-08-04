<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $table = 'question';
    
    protected $fillable = [
        'description', 'id_topicFK',
    ];
}
