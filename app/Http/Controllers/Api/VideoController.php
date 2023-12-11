<?php

namespace App\Http\Controllers\Api;

use App\Actions\VideosAction;
use App\Http\Controllers\Controller;
use App\Http\Requests\VideoRequest;
use App\Models\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function index()
    {
        $videos = Video::all();
        return response()->json($videos,200);
    }

    public function store(VideoRequest $request, VideosAction $action)
    {
        $video = $action->store($request);
        return response()->json($video,200);
    }

    public function update(VideoRequest $request, $IdVideo, VideosAction $action)
    {
        $Video = $action->update($request, $IdVideo);
        return response()->json($Video,200);
    }

    public function delete($IdVideo, VideosAction $action)
    {
        $Video = $action->delete($IdVideo);
        return response()->noContent();
    }

}
