<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Achievement extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'event',
        'role_or_rank',
        'year',
        'organization',
        'description',
        'badge',
        'badge_color',
        'image',
        'order',
    ];
}
