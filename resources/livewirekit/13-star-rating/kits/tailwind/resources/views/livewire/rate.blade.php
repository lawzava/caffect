<div>
    <h2 class="text-3xl">Demo Post title</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc eu ullamcorper mi, eu pretium tortor. Sed
        faucibus orci sed malesuada sollicitudin. Vestibulum tristique vestibulum magna. Vestibulum in tristique
        nunc, ut consectetur nisi.</p>
    <div class="mt-4 mb-4">
        Current rating: <b>{{ $currentRating }}</b>
    </div>
    <h3 class="text-2xl">Rate the post</h3>

    @if (!is_null($rating))
        <div class="flex">
            @for ($i=1; $i<=$rating; $i++)
                <img src="{{ asset('img/star-active.png') }}" width="30"/>
            @endfor
            @for ($i=$rating+1; $i<=5; $i++)
                <img src="{{ asset('img/star-inactive.png') }}" width="30"/>
            @endfor
        </div>
        <div>
            You rated: {{ $rating }} / 5
        </div>
    @else
        <div class="flex">
            @for ($i=1; $i<=5; $i++)
                <a wire:click.prevent="rate({{ $i }})" href="#"><img src="{{ asset('img/star-inactive.png') }}"
                                                                     width="30"/></a>
            @endfor
        </div>
    @endif
</div>
