<?php

namespace App\Http\Livewire;

use App\Models\QuizOption;
use App\Models\QuizQuestion;
use Livewire\Component;

class Quiz extends Component
{
    public $questions;
    public $currentQuestionNumber = 1;
    public $answers = [];
    public $answer = null;
    public $result = null;

    public function mount()
    {
        $this->questions = QuizQuestion::with('options')
            ->inRandomOrder()
            ->get();
    }

    public function render()
    {
        return view('livewire.quiz');
    }

    public function updatedAnswer()
    {
        if (!is_null($this->answer)) {
            $this->answers[] = $this->answer;
            $this->currentQuestionNumber++;
        }

        if (count($this->answers) >= $this->questions->count()) {
            $correctAnswers = QuizOption::where('is_correct', true)
                ->whereIn('question_id', $this->questions->pluck('id'))
                ->pluck('id')
                ->toArray();

            $this->result = count(array_intersect($correctAnswers, $this->answers));
        }

        $this->answer = null;
    }
}
