<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\EventResource;
use App\Models\Event;
use Illuminate\Http\Request;
use App\Helper\ApiResponse;

class EventController extends Controller
{
    use ApiResponse;
    public function index()
    {
        $events =  EventResource::collection(Event::orderBy('id','desc')->get());
        return $this->responseSuccess(200, "Success", $events);
    }

    public function show(Event $event)
    {
        return $this->responseSuccess(200, "Success", $event);
    }

    public function latest()
    {
        $events =  EventResource::collection(Event::limit(3)->orderBy('id','desc')->get());
        return $this->responseSuccess(200, "Success", $events);
    }



}
