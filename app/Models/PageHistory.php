<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PageHistory extends Model
{
    protected $fillable = [
        'page_id',
        'description',
    ];
}
