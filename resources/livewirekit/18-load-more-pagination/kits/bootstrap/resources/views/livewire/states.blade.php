<div>
    <div class="alert alert-info">
        This simple table shows 5 records. Click "Load more..." and see what happens.
    </div>
    <table class="table mb-4">
        <thead>
        <tr>
            <th>State Name</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($states as $state)
            <tr>
                <td>{{ $state->name }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>

    @if ($showLoadMoreButton)
        <button wire:click="loadmore"
                type="button"
                class="btn btn-primary">Load more...</button>
    @endif
</div>
