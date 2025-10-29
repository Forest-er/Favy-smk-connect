<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proposal extends Model
{
    use HasFactory;

    protected $table = 'proposals';
    protected $primaryKey = 'id_proposal';
    protected $fillable = [
        'task_id',
        'worker_id',
        'nama',
        'email',
        'status',   
        'deskripsi',
        'cv_link',
    ];
    public function task()
    {
        return $this->belongsTo(Task::class, 'task_id', 'id_task');
    }
}
