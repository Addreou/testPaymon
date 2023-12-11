<?php

namespace App\Actions;

use App\Http\Requests\VideoRequest;
use App\Models\Video;

class VideosAction
{
    public function store (VideoRequest $request)
    {
        $Video = Video::create([
            'title' => $request->title,
            'main_character' => $request->main_character,
            'type' => $request->type,
            'description' => $request->description,
            'url' => $request->url,
        ]);

        return $Video;
    }

    public function update(VideoRequest $request, $IdVideo)
    {
        $Video = Video::where('id',$IdVideo)->update([
            'title' => $request->title,
            'main_character' => $request->main_character,
            'type' => $request->type,
            'description' => $request->description,
            'url' => $request->url,
        ]);

        return $Video;
    }

    public function delete($IdVideo)
    {
        Video::where('id',$IdVideo)->delete();
    }
}