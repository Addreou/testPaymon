<?php

namespace App\Livewire;

use App\Actions\VideosAction;
use App\Models\Video;
use Livewire\Component;
use Illuminate\Support\Facades\Gate;

class ActionsVideos extends Component
{
    public int $IdVideo;

    public function delete($IdVideo, VideosAction $action)
    {
        if(!Gate::any(['test_developer','test_admin']))
        {
            abort(403);
        }

        $Video = $action->delete($IdVideo);

        $this->dispatch('refreshViewVideos');
    }

    public function render()
    {
        // dump($IdVideo, $IdConfirm);
        return view('livewire.actions-videos');
    }
}
