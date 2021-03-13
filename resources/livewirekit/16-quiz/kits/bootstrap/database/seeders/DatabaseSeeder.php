<?php

namespace Database\Seeders;

use App\Models\QuizQuestion;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $question = QuizQuestion::create(['question' => 'What color is the sun?']);
        $question->options()->create([
            'option_text' => 'Yellow',
            'is_correct' => 1
        ]);
        $question->options()->create([
            'option_text' => 'Blue',
        ]);
        $question->options()->create([
            'option_text' => 'Red',
        ]);

        $question = QuizQuestion::create(['question' => 'Capital of France?']);
        $question->options()->create([
            'option_text' => 'Paris',
            'is_correct' => 1
        ]);
        $question->options()->create([
            'option_text' => 'Toulouse',
        ]);
        $question->options()->create([
            'option_text' => 'Lyon',
        ]);

        $question = QuizQuestion::create(['question' => 'NBA: A stands for...?']);
        $question->options()->create([
            'option_text' => 'Association',
            'is_correct' => 1
        ]);
        $question->options()->create([
            'option_text' => 'America',
        ]);
        $question->options()->create([
            'option_text' => 'Act',
        ]);
    }
}
