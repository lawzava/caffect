<div>
    @if (is_null($result))
        @foreach ($questions as $question)
            @if ($loop->iteration == $currentQuestionNumber)
                <h4>Question {{ $currentQuestionNumber }}/{{ $questions->count() }}. {{ $question->question }}</h4>
                @foreach ($question->options->shuffle() as $option)
                    <input wire:model="answer" type="radio" value="{{ $option->id }}"/> {{ $option->option_text }}
                    <br/>
                @endforeach
            @endif
        @endforeach
    @else
        <h4>Quiz finished!</h4>
        Your result: <b>{{ $this->result }}</b> / {{ $questions->count() }}.
    @endif
</div>
