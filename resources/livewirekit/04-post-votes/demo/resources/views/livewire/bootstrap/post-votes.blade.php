<div class="text-center">
    <a wire:click.prevent="vote(1)" href="#"><i class="fa fa-2x fa-sort-asc" aria-hidden="true"></i></a>
    <h3 class="mb-0 mt-0">{{ $sumVotes }}</h3>
    <a wire:click.prevent="vote(-1)" href="#"><i class="fa fa-2x fa-sort-desc" aria-hidden="true"></i></a>
</div>

