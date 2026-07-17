<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ask extends Model
{
    protected $fillable = ['question', 'answer', 'sources', 'status', 'error'];

    protected $casts = [
        'sources' => 'array',
    ];
}
