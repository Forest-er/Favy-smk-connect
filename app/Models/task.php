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
    public function show($id)
    {
        $task = Task::with(['jurusan', 'user'])->find($id);

        if (!$task) {
            return response()->json(['error' => 'Task tidak ditemukan'], 404);
        }

        return response()->json([
            'id' => $task->id,
            'judul' => $task->judul,
            'deskripsi' => $task->deskripsi,
            'budget' => 'Rp' . number_format($task->budget, 0, ',', '.'),
            'deadline' => \Carbon\Carbon::parse($task->deadline)->format('d M Y'),
            'jurusan' => $task->jurusan->nama_jurusan ?? 'Tidak diketahui',
            'user' => $task->user->nama ?? 'Anonim',
            'foto' => $task->foto ? asset('storage/' . $task->foto) : 'https://images.pexels.com/photos/1181244/pexels-photo-1181244.jpeg',
            'skills' => $task->skills ? explode(',', $task->skills) : [],
        ]);
    }

}
