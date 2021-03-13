<div>
    <div class="alert alert-info" role="alert">
        Choose at least one product, and click "Delete selected".
    </div>
    <button wire:click.prevent="deleteSelected"
            onclick="confirm('Are you sure?') || event.stopImmediatePropagation()"
            class="btn btn-danger" @if ($bulkDisabled) disabled @endif>
        Delete Selected
    </button>

    <table class="table table-stripped mt-3">
        <tr>
            <th></th>
            <th>Name</th>
            <th>Category</th>
            <th>Price</th>
        </tr>
        @foreach($products as $product)
            <tr>
                <th>
                    <input type="checkbox" wire:model="selectedProducts" value="{{ $product->id }}">
                </th>
                <td>{{ $product->name }}</td>
                <td>{{ $product->category->name }}</td>
                <td>${{ $product->price }}</td>
            </tr>
        @endforeach
    </table>
</div>
