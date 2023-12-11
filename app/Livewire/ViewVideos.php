<?php

namespace App\Livewire;

use App\Models\Video;
use Livewire\Component;
use Illuminate\Support\Facades\Gate;

class ViewVideos extends Component
{
    public $Videos;
    public $FirstVideo;

    public int $IdConfirm = 0;

    public function mount()
    {
        // $this->Videos = Video::all();
        // $url = $this->Videos[0]->url;
        // parse_str(parse_url($url, PHP_URL_QUERY), $array);
        // $this->Videos[0]->url = $array['v'];
        // $this->FirstVideo = $this->Videos[0];
        // dump($this->FirstVideo,$this->IdConfirm);
    }

    public function confirm($IdVideo)
    {
        $this->IdConfirm = $IdVideo;
        dump($this->IdConfirm);
    }

    public function delete($IdVideo)
    {
        if(!Gate::any(['test_developer','test_admin']))
        {
            abort(403);
        }

        Video::where($IdVideo)->delete();
    }

    public function render()
    {
        $this->Videos = Video::all();
        $url = $this->Videos[0]->url;
        parse_str(parse_url($url, PHP_URL_QUERY), $array);
        $this->Videos[0]->url = $array['v'];
        $this->FirstVideo = $this->Videos[0];

        return view('livewire.view-videos');
    }
}
