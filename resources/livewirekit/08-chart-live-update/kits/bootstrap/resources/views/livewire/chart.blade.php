<div wire:poll.5s>
    <div wire:ignore wire:key={{ $chartId }}>
        @if($chart)
            {!! $chart->container() !!}
        @endif
    </div>

</div>

@if($chart)
    @push('scripts')
        {!! $chart->script() !!}
    @endpush
@endif
