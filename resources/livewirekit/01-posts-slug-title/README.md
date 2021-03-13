## Livewire Kit: Posts: Generate Slug from Title

This is a component to add a "slug" text field for your forms that would automatically generate a slug from another text field (title, most likely) in a live mode.

**Notice**: this component shows both Posts table and short two-field form, so to adapt it to your real project, you would have to choose which parts of the code to use/copy.


### Files of the Component

- app/Http/Livewire/Posts.php
- app/Models/Post.php
- resources/views/livewire/posts.blade.php
- composer.json (Sluggable package)


### How to use

- Make sure you have Livewire installed and enabled with `@livewireStyles` and `@livewireScripts`. For more info, read the [official docs](https://laravel-livewire.com/docs/2.x/quickstart) 
- Copy files `app/Http/Livewire/Posts.php` and `resources/views/livewire/posts.blade.php` into your own project
- In file `app/Http/Livewire/Posts.php` check the models and DB queries used, adapt to your DB structure
- If needed, run/modify migrations for `posts` DB table, located in `database/migrations` folder.
- In Blade file(s), wherever you need to use this component, call it with `@livewire('posts')`
- Check how it looks and make the changes necessary


Need help or extra features? Email me directly and let's discuss: povilas@laraveldaily.com 