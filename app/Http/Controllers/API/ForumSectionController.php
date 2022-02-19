<?php

namespace App\Http\Controllers\Api;

use App\Helper\ApiResponse;
use App\Http\Controllers\Controller;
use App\Models\ForumSection;
use Illuminate\Http\Request;

class ForumSectionController extends Controller
{
    use ApiResponse;
    public function index()
    {
        return $this->responseSuccess(200, "Success", ForumSection::get());
    }

    public function show($id)
    {
        $forum = ForumSection::with('forumThreads')->find($id);
        return $this->responseSuccess(200, "Success", $forum);
    }
}
