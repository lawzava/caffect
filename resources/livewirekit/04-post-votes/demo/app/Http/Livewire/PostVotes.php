<?php

namespace App\Http\Livewire;

use Livewire\Component;

class PostVotes extends Component
{
    public $sumVotes;
    public $post;

    public $designTemplate = 'tailwind';

    public function mount($post)
    {
        $this->post = $post;
        $this->sumVotes = $post->votes->sum('vote');
    }

    public function render()
    {
        return view('livewire.'.$this->designTemplate.'.post-votes');
    }

    public function vote($vote)
    {
        $userId = 1; // This is for demo purposes
        // Change this probably to auth()->id()

        // User already voted, or wrong parameters
        if (!in_array($vote, [-1,1])
            || $this->post->votes->where('user_id', $userId)->count()) {
            return;
        }

        $this->post->votes()->create([
            'user_id' => $userId,
            'vote' => $vote
        ]);

        $this->sumVotes += $vote;
    }

}
