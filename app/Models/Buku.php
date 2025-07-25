<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Buku extends Model
{
    use SoftDeletes;
    
    protected $guarded = [];
    protected $casts = ['genre' => 'array'];
    protected $hidden = ['created_at'];

    public function authors()
    {
        return $this->belongsTo(Author::class);
    }
}
