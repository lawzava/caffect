<?php

namespace App\Http\Livewire;

use Livewire\Component;

class PostVotes extends Component
{
    public $sumVotes;
    public $post;

    public function mount($post)
    {
        $this->post = $post;
        $this->sumVotes = $post->votes->sum('vote');
    }

    public function render()
    {
        return view('livewire.post-votes');
    }

    public function vote($vote)
    {
        // User already voted, or wrong parameters
        if (!in_array($vote, [-1,1])
            || $this->post->votes->where('user_id', auth()->id())->count()) {
            return;
        }

        $this->post->votes()->create([
            'user_id' => $userId,
            'vote' => $vote
        ]);

        $this->sumVotes += $vote;
    }

}
