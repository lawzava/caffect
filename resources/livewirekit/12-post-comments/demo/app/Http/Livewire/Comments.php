<?php

namespace App\Http\Livewire;

use App\Models\PostComment;
use Livewire\Component;

class Comments extends Component
{
    public $postId;
    public $username;
    public $comment_text;
    public $replyCommentId = NULL;

    public $designTemplate = 'tailwind';

    protected $rules = [
        'username' => 'required',
        'comment_text' => 'required'
    ];

    public function render()
    {
        $comments = PostComment::whereNull('parent_id')
            ->with('replies')
            ->latest()
            ->get();
        return view('livewire.'.$this->designTemplate.'.comments', [
            'comments' => $comments
        ]);
    }

    public function save_comment()
    {
        $this->validate();

        PostComment::create([
            'post_id' => $this->postId,
            'username' => $this->username,
            'comment_text' => $this->comment_text,
            'parent_id' => $this->replyCommentId
        ]);

        $this->username = '';
        $this->comment_text = '';
        $this->replyCommentId = NULL;
    }

    public function reply($commentId)
    {
        $this->replyCommentId = $commentId;
    }
}
