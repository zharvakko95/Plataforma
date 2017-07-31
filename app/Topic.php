<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Topic extends Model {

    protected $table = 'topic';
    
    protected $fillable = [
        'name', 'description', 'id_topic1FK', 'id_topic2FK', 'video', 'id_cursoFK',
    ];

}
