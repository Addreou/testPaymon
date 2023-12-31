<?php

namespace App\Http\Controllers;

use App\Actions\VideosAction;
use App\Http\Requests\VideoRequest;
use App\Models\Video;
use Illuminate\Support\Facades\Gate;

class VideoController extends Controller
{
    public function create()
    {
        if(!Gate::any(['test_developer','test_admin']))
        {
            abort(403);
        }

        return view('video_create');
    }

    public function store(VideoRequest $request, VideosAction $action)
    {
        if(!Gate::any(['test_developer','test_admin']))
        {
            abort(403);
        }

        $Video = $action->store($request);

        return redirect()->route('dashboard');
    }

    public function edit($IdVideo)
    {
        if(!Gate::any(['test_developer','test_admin']))
        {
            abort(403);
        }

        $Video = Video::find($IdVideo);

        return view('video_edit',compact('Video'));
    }

    public function update (VideoRequest $request, $IdVideo, VideosAction $action)
    {
        if(!Gate::any(['test_developer','test_admin']))
        {
            abort(403);
        }

        $Video = $action->update($request, $IdVideo);

        return redirect()->route('dashboard');
    }

    // public function delete($IdVideo)
    // {
    //     if(!Gate::any(['test_developer','test_admin']))
    //     {
    //         abort(403);
    //     }

    //     Video::where('id',$IdVideo)->delete();

    //     return redirect()->route('dashboard');
    // }
}
