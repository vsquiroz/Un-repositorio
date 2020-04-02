<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cate extends Model
{
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class)->orderBy('created_at', 'desc');
    }
}
