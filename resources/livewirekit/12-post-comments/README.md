## Livewire Kit: Post Comment Form

This is a component to add a comment form to any article or post in your project.


### Files of the Component

- app/Http/Livewire/Comments.php
- app/Models/Post.php
- app/Models/PostComment.php
- resources/views/livewire/comments.blade.php


### How to use

- Make sure you have Livewire installed and enabled with `@livewireStyles` and `@livewireScripts`. For more info, read the [official docs](https://laravel-livewire.com/docs/2.x/quickstart) 
- Copy files `app/Http/Livewire/Comments.php` and `resources/views/livewire/comments.blade.php` into your own project where you need to show the list of comments
- In Blade file(s), wherever you need to use this component, call it with `@livewire('comments', ['postId' => 1])` where "1" should be replaced by the real value you're working with
- Check how it looks and make the changes necessary


Need help or extra features? Email me directly and let's discuss: povilas@laraveldaily.com 