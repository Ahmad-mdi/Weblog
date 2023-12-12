<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $guarded = [];
    //search post by slug (route model binding)
    public function getRouteKeyName(): string
    {
        return 'slug';
    }
}
