<div>
    <h3>Comments</h3>
    @forelse ($comments as $comment)
        <div style="margin-bottom: 10px">
            <b>{{ $comment->username }} ({{ $comment->created_at->diffForHumans() }})</b>
            <br/>
            {{ $comment->comment_text }}
            <br/>
            <a wire:click.prevent="reply({{ $comment->id }})" href="#" style="text-decoration: underline; font-size: 12px">Reply
                to this comment</a>
        </div>
        @foreach ($comment->replies as $reply)
            <div style="padding-left: 30px; margin-bottom: 10px">
                <b>{{ $reply->username }} ({{ $reply->created_at->diffForHumans() }})</b>
                <br/>
                {{ $reply->comment_text }}
            </div>
        @endforeach
    @empty
        No comments yet.
    @endforelse
    <hr/>
    <h3>{{ is_null($replyCommentId) ? 'Add a comment' : 'Reply to a comment' }}</h3>
    <form wire:submit.prevent="save_comment">
        <div class="form-group">
        Username*:
        <br/>
        <input wire:model.defer="username" type="text" class="form-control"/>
        @error('username')
        <div style="color: red; font-size: 12px">{{ $message }}</div>
        @enderror
        </div>
        <div class="form-group">
        Comment text*:
        <br/>
        <textarea wire:model.defer="comment_text" rows="3" class="form-control" maxlength="500"></textarea>
        @error('comment_text')
        <div style="color: red; font-size: 12px">{{ $message }}</div>
        @enderror
        </div>
        <button type="submit" class="btn btn-primary">Post Comment</button>
    </form>
</div>
