## Livewire Kit: Star Rating in Livewire

This is a component to show the example of 1-5 stars rating on some item.


### Files of the Component

- app/Http/Livewire/Rate.php 
- app/Models/Rating.php
- resources/views/livewire/tailwind/rate.blade.php
- resources/views/livewire/bootstrap/rate.blade.php


### How to use

- Make sure you have Livewire installed and enabled with `@livewireStyles` and `@livewireScripts`. For more info, read the [official docs](https://laravel-livewire.com/docs/2.x/quickstart) 
- Copy files `app/Http/Livewire/Rate.php` and `resources/views/livewire/rate.blade.php` into your own project
- Add/modify your own fields and models, instead of the example `post_id` you may need `article_id` or something else.
- In Blade file(s), wherever you need to use this component, call it with `@livewire('rate', ['postId' => $yourPostId])`
- Check how it looks and make the changes necessary


Need help or extra features? Email me directly and let's discuss: povilas@laraveldaily.com 