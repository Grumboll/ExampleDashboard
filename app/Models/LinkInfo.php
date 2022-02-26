<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LinkInfo extends Model
{
    use HasFactory;

    protected $table = "linkinfo";

    protected $fillable = [
        'Title',
        'Link',
        'Color',
        'pos'
    ];
}
