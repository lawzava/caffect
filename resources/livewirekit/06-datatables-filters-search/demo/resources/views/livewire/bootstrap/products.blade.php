<div>
    <div class="alert alert-info">
        See the table. You can filter the data by searching for name/price/description/category, also use sorting and pagination.
    </div>
    <table class="table">
        <thead>
        <tr>
            <th class="w-25" wire:click="sortByColumn('name')">
                Name
                @if ($sortColumn == 'name')
                    <i class="fa fa-fw fa-sort-{{ $sortDirection }}"></i>
                @else
                    <i class="fa fa-fw fa-sort" style="color:#DCDCDC"></i>
                @endif
            </th>
            <th class="w-25" wire:click="sortByColumn('price')">
                Price
                @if ($sortColumn == 'price')
                    <i class="fa fa-fw fa-sort-{{ $sortDirection }}"></i>
                @else
                    <i class="fa fa-fw fa-sort" style="color:#DCDCDC"></i>
                @endif
            </th>
            <th class="w-25" wire:click="sortByColumn('description')">
                Description
                @if ($sortColumn == 'description')
                    <i class="fa fa-fw fa-sort-{{ $sortDirection }}"></i>
                @else
                    <i class="fa fa-fw fa-sort" style="color:#DCDCDC"></i>
                @endif
            </th>
            <th class="w-25" wire:click="sortByColumn('category_name')">
                Category
                @if ($sortColumn == 'category_name')
                    <i class="fa fa-fw fa-sort-{{ $sortDirection }}"></i>
                @else
                    <i class="fa fa-fw fa-sort" style="color:#DCDCDC"></i>
                @endif
            </th>
        </tr>
        <tr>
            <td>
                <input type="text" class="form-control" wire:model="searchColumns.name"/>
            </td>
            <td>
                From
                <input type="number" class="form-control d-inline mb-2" style="width: 75px"
                       wire:model="searchColumns.price.0"/>
                to
                <input type="number" class="form-control d-inline" style="width: 75px"
                       wire:model="searchColumns.price.1"/>
            </td>
            <td>
                <input type="text" class="form-control" wire:model="searchColumns.description"/>
            </td>
            <td>
                <select class="form-control" wire:model="searchColumns.product_category_id">
                    <option value="">-- choose category --</option>
                    @foreach($categories as $id => $category)
                        <option value="{{ $id }}">{{ $category }}</option>
                    @endforeach
                </select>
            </td>
        </tr>
        </thead>
        <tbody>
        @foreach($products as $product)
            <tr>
                <td>{{ $product->name }}</td>
                <td>${{ number_format($product->price, 2) }}</td>
                <td>{{ Str::limit($product->description, 50) }}</td>
                <td>{{ $product->category->name ?? '' }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>

    {{ $products->links() }}
</div>
