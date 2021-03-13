## Livewire Kit: Post Votes

This is a component to add to your posts or articles, so users would be able to upvote/downvote them.

Component uses `auth()->id()` method, so assumes that this feature would be accessible only to logged-in users.


### Files of the Component

- app/Http/Livewire/PostVotes.php
- app/Models/Post.php
- app/Models/PostVote.php
- resources/views/livewire/post-votes.blade.php


### How to use

- Make sure you have Livewire installed and enabled with `@livewireStyles` and `@livewireScripts`. For more info, read the [official docs](https://laravel-livewire.com/docs/2.x/quickstart) 
- Copy files `app/Http/Livewire/PostVotes.php` and `resources/views/livewire/post-votes.blade.php` into your own project
- In file `app/Http/Livewire/PostVotes.php` check the models and DB queries used, adapt to your DB structure
- If needed, run/modify migrations for `posts` and/or `post_votes` DB table, located in `database/migrations` folder.
- In Blade file(s), wherever you need to use this component, call it with `@livewire('post-votes', ['post' => $post])` - change `$post` to whatever model you want to be voted on
- Check how it looks and make the changes necessary


Need help or extra features? Email me directly and let's discuss: povilas@laraveldaily.com 