<div x-data="{ 'showModal': false }" @keydown.escape="showModal = false">
    <div class="mb-4 px-4 py-3 leading-normal text-blue-700 bg-blue-100 rounded-lg" role="alert">
        Choose at least two products, and click "Bulk edit" to modify their category.
    </div>
    <button @click="showModal = true"
            class="@if ($bulkDisabled) opacity-50 @endif bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
        Bulk edit
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
                    <input type="checkbox" wire:model="selectedProducts.{{ $product->id }}">
                </td>
                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500 text-sm leading-5">{{ $product->name }}</td>
                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500 text-sm leading-5">{{ $product->category->name }}</td>
                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500 text-sm leading-5">${{ $product->price }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>

    <div x-show="showModal"
         class="flex items-center justify-center fixed left-0 bottom-0 w-full h-full bg-gray-800 bg-opacity-90">
        <div class="bg-white rounded-lg w-1/2">
            <div class="flex flex-col items-start p-4">
                <div class="flex items-center w-full border-b pb-4">
                    <div class="text-gray-900 font-medium text-lg">Categories</div>
                    <svg @click="showModal = false"
                         class="ml-auto fill-current text-gray-700 w-6 h-6 cursor-pointer"
                         xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18 18">
                        <path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z"/>
                    </svg>
                </div>
                <div class="py-4 border-b w-full mb-4">
                    <select wire:model.defer="selectedCategory" class="w-full bg-white border p-2">
                        <option value="null">Please select</option>
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="ml-auto">
                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"
                            wire:click="changeCategory"
                            @click="showModal = false">
                        Save
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
