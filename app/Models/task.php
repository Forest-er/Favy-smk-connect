<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_task';

    protected $fillable = [
        'users_id',
        'judul',
        'foto',
        'deskripsi',
        'jurusan_id',
        'deadline',
        'waktu_estimasi',
        'status',
        'budget'
    ];

    public function jurusan()
    {
        return $this->belongsTo(Jurusan::class, 'jurusan_id', 'id_jurusan');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'users_id', 'id_users');
    }
}
