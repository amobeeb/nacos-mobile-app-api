<?php

namespace App\Http\Controllers\Api;

use App\Helper\ApiResponse;
use App\Http\Controllers\Controller;
use App\Models\ForumThread;
use Illuminate\Http\Request;

class ForumThreadController extends Controller
{
    use ApiResponse;
    public function show($id)
    {
        $forumThread = ForumThread::with('forumComment')->find($id);
        return $this->responseSuccess(200, "Success", $forumThread);
    }

}
