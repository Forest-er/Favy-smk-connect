<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LikedTask extends Model
{
    use HasFactory;

    protected $table = 'liked_tasks';
    protected $fillable = ['user_id', 'task_id'];
}

