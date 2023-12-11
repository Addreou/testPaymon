<?php

namespace App\Livewire;

use App\Models\Video;
use Livewire\Component;
use Livewire\Attributes\On;

class ViewVideos extends Component
{
    public $Videos;
    public $FirstVideo;

    public function getFirstVideo($item)
    {
        $url = $item->url;
        parse_str(parse_url($url, PHP_URL_QUERY), $array);
        $item->url = $array['v'];
        $this->FirstVideo = $item;
    }

    #[On('refreshViewVideos')]
    public function mount()
    {
        $this->Videos = Video::all();
        $this->getFirstVideo($this->Videos[0]);
    }

    public function play($IdVideo)
    {
        $Video = Video::where('id',$IdVideo)->first();
        $this->getFirstVideo($Video);
    }

    public function render()
    {
        return view('livewire.view-videos');
    }
}
