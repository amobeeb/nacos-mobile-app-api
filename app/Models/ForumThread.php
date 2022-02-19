<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ForumThread extends Model
{
    use HasFactory;

    protected $fillable = ['title','image','description','forum_section_id'];

    public function forumSection()
    {
        return $this->belongsTo(ForumSection::class);
    }

    public function forumComment()
    {
        return $this->hasMany(ForumComment::class);
    }
}
