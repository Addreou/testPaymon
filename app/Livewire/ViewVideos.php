<?php

namespace App\Livewire;

use App\Enums\TipoEstadistica;
use App\Models\Estadistica;
use App\Models\Video;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\Attributes\On;

class ViewVideos extends Component
{
    public $Videos;
    public $FirstVideo;

    public $search = null;
    public bool $playing = false;

    public function getFirstVideo($item)
    {
        $url = $item->url;
        parse_str(parse_url($url, PHP_URL_QUERY), $array);
        $item->url = $array['v'];
        $item->with('statsViews','statsSearches');
        $this->FirstVideo = $item;
    }

    public function play($IdVideo)
    {
        $this->playing = true;
        $Video = Video::where('id',$IdVideo)->first();
        $Stats = Estadistica::create([
            'user_id' => Auth::user()->id,
            'video_id' => $Video->id,
            'type' => TipoEstadistica::VISTA->value,
        ]);
        $this->getFirstVideo($Video);
    }

    #[On('refreshViewVideos')]
    public function render()
    {
        if($this->search != null)
        {
            $Videos = Video::where('title','like',"%".$this->search."%")
                ->orWhere('main_character','like',"%".$this->search."%")
                ->orWhere('description','like',"%".$this->search."%")
                ->get();

            if($Videos->count() == 1)
            {
                $Stats = Estadistica::create([
                    'user_id' => Auth::user()->id,
                    'video_id' => $Videos[0]->id,
                    'type' => TipoEstadistica::BUSQUEDA->value,
                ]);
            }

            $this->Videos = $Videos;
        }
        else {
            $this->Videos = Video::all();
        }

        if(!$this->playing)
        {
            $this->getFirstVideo($this->Videos[0]);
            $this->playing = false;
        }

        return view('livewire.view-videos');
    }
}
