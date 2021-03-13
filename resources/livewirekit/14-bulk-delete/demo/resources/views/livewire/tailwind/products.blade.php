<div>
    <div class="mb-4 px-4 py-3 leading-normal text-blue-700 bg-blue-100 rounded-lg" role="alert">
        Choose at least one product, and click "Delete selected".
    </div>
    <button wire:click.prevent="deleteSelected"
            onclick="confirm('Are you sure?') || event.stopImmediatePropagation()"
            class="@if ($bulkDisabled) opacity-50 @endif bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
        Delete Selected
    </button>
    <table class="table min-w-full">
        <thead>
        <tr>
            <th colspan="4">

            </th>
        </tr>
        <tr>
            <th class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 tracking-wider"></th>
            <th class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 tracking-wider">Name</th>
            <th class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 tracking-wider">Category</th>
            <th class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 tracking-wider">Price</th>
        </tr>
        </thead>
        <tbody class="bg-white">
        @foreach($products as $product)
            <tr>
                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500 text-sm leading-5">
                    <input type="checkbox" wire:model="selectedProducts" value="{{ $product->id }}">
                </td>
                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500 text-sm leading-5">{{ $product->name }}</td>
                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500 text-sm leading-5">{{ $product->category->name }}</td>
                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500 text-sm leading-5">${{ $product->price }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
