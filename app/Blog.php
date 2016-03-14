<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    public function user()
    {
        $this->belongsTo('User', 'user_id');
    }
}
