<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ForumComment extends Model
{
    use HasFactory;
    protected $fillable = [
        'comments', 'forum_thread_id', 'status'
    ];
    public function forum_thread()
    {
        return $this->belongsTo(ForumThread::class);
    }
}
