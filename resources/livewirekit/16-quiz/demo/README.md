## Livewire Kit: Quiz

### How to use

- Copy `.env.example` file to `.env` and edit database credentials there
- Run `composer install`
- Run `php artisan key:generate`
- Run `php artisan migrate --seed` (it has some seeded data for your testing)
- That's it: launch the main URL
- You will see Tailwind CSS version, for Bootstrap visit `/bootstrap` URL


### Files of the Component

- app/Http/Livewire/Quiz.php
- app/Models/QuizQuestion.php
- app/Models/QuizOption.php
- resources/views/livewire/tailwind/quiz.blade.php
- resources/views/livewire/bootstrap/quiz.blade.php
