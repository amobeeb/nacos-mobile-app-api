<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ForumSection extends Model
{
    use HasFactory;

    protected $fillable = ['image','section'];

    public function setSectionAttribute($value)
    {
        $this->attributes['section'] = ucwords($value);
    }

    public function forumThreads()
    {
        return $this->hasMany(ForumThread::class, 'forum_section_id');
    }



}
