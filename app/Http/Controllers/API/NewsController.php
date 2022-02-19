<?php

namespace App\Http\Controllers\Api;

use App\Helper\ApiResponse;
use App\Http\Controllers\Controller;
use App\Http\Resources\NewsResource;
use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    use ApiResponse;
    public function index()
    {
        $events =  NewsResource::collection(News::orderBy('id','desc')->get());
        return $this->responseSuccess(200, "Success", $events);
    }

    public function show(News $news)
    {
        return $this->responseSuccess(200, "Success", $news);
    }

    public function latest()
    {
        $events =  NewsResource::collection(News::limit(3)->orderBy('id','desc')->get());
        return $this->responseSuccess(200, "Success", $events);
    }
}
