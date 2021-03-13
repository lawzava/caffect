<div>
    @if (is_null($result))
        @foreach ($questions as $question)
            @if ($loop->iteration == $currentQuestionNumber)
                <h3 class="text-xl">Question {{ $currentQuestionNumber }}/{{ $questions->count() }}. {{ $question->question }}</h3>
                @foreach ($question->options->shuffle() as $option)
                    <input wire:model="answer" type="radio" value="{{ $option->id }}"/> {{ $option->option_text }}
                    <br/>
                @endforeach
            @endif
        @endforeach
    @else
        <h3 class="text-xl">Quiz finished!</h3>
        Your result: <b>{{ $this->result }}</b> / {{ $questions->count() }}.
    @endif
</div>
