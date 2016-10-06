<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{

    public $table = 'news_items';

    public $fillable = [
        'title',
        'body'
    ];

    public function user() {
        return $this->hasOne('App\User', 'id', 'user_id');
    }

}
