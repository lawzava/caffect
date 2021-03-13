## Livewire Kit: Form Live-Validation

This is a component to show the example of live-validation of form fields as the user types.

As an example, there are two validation rules: product name with unique name and minimum 3 characters, also product description textarea with minimum 50 characters length.


### Files of the Component

- app/Http/Livewire/ProductForm.php
- app/Models/Product.php
- resources/views/livewire/product-form.blade.php


### How to use

- Make sure you have Livewire installed and enabled with `@livewireStyles` and `@livewireScripts`. For more info, read the [official docs](https://laravel-livewire.com/docs/2.x/quickstart) 
- Copy files `app/Http/Livewire/ProductForm.php` and `resources/views/livewire/product-form.blade.php` into your own project
- Rename the files according to your models, from `ProductForm` to `ArticleForm`, and then from `product-form.blade.php` to `article-form.blade.php` or whatever. Don't forget to change the `render()` method of the component, to edit which Blade file it should render.
- Add/modify your own fields of your form, instead of the example name/description, specifying your own `$rules` in the component.
- In Blade file(s), wherever you need to use this component, call it with `@livewire('product-form')`, or replace `product-form` with the new name of your component, like `article-form`
- Check how it looks and make the changes necessary


Need help or extra features? Email me directly and let's discuss: povilas@laraveldaily.com 