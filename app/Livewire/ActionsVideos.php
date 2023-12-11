<?php

namespace App\Livewire;

use App\Models\Video;
use Livewire\Component;
use Illuminate\Support\Facades\Gate;

class ActionsVideos extends Component
{
    public int $IdVideo;

    public function delete($IdVideo)
    {
        if(!Gate::any(['test_developer','test_admin']))
        {
            abort(403);
        }

        Video::where('id',$IdVideo)->delete();
        $this->dispatch('refreshViewVideos');
    }

    public function render()
    {
        // dump($IdVideo, $IdConfirm);
        return view('livewire.actions-videos');
    }
}
