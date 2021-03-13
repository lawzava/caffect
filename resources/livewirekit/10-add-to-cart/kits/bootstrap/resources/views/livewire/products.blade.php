<table class="table mt-4">
    <thead>
    <tr>
        <th>Name</th>
        <th>Price</th>
        <th></th>
    </tr>
    </thead>
    <tbody>
    @forelse ($products as $product)
        <tr>
            <td>{{ $product->name }}</td>
            <td>${{ $product->price }}</td>
            <td>
                @if (!in_array($product->id, $cartProducts))
                    <a wire:click.prevent="addToCart({{ $product->id }})"
                       href="#" class="btn btn-sm btn-primary">Add to Cart</a>
                @else
                    <a wire:click.prevent="removeFromCart({{ $product->id }})"
                       href="#" class="btn btn-sm btn-danger">Remove from Cart</a>
                @endif
            </td>
        </tr>
    @empty
        <tr>
            <td colspan="3">No products found.</td>
        </tr>
    @endforelse
    </tbody>
</table>

