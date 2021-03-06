<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Diary extends Model
{
    //
    protected $fillable = [
        'title',
        'description',
    ];

    public function user(){
        return $this->BelongsTo('App\user');
    }
}
