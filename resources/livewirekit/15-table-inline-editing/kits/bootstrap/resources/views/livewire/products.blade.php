<div>
    <div class="alert alert-info" role="alert">
        Click "Edit", modify that line data and click "Save".
    </div>
    <table class="table">
        <thead>
        <tr>
            <th>Product</th>
            <th>Price</th>
            <th width="250"></th>
        </tr>
        </thead>
        <tbody>
        @foreach ($products as $index => $product)
            <tr>
                <td>
                    @if($editedProductIndex !== $index)
                        {{ $product['name'] }}
                    @else
                        <input type="text" wire:model.defer="products.{{ $index }}.name" />
                    @endif
                </td>
                <td>
                    @if($editedProductIndex !== $index)
                        {{ $product['price'] }}
                    @else
                        <input type="text" wire:model.defer="products.{{ $index }}.price" />
                    @endif
                </td>
                <td>
                    @if($editedProductIndex !== $index)
                        <button class="btn btn-sm btn-primary"
                                wire:click.prevent="editProduct({{$index}})">
                            Edit
                        </button>
                    @else
                        <button class="btn btn-sm btn-success mr-1"
                                wire:click.prevent="saveProduct({{$index}})">
                            Save
                        </button>
                    @endif
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
