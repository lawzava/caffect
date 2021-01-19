<div>
    <table class="table-auto w-full">
        <thead>
        <tr>
            <th class="px-4 py-2">Name</th>
            <th class="px-4 py-2">Producer</th>
            <th class="px-4 py-2">Origin</th>
            <th class="px-4 py-2">Taste</th>
            <th class="px-4 py-2">Aroma</th>
            <th class="px-4 py-2">Delete</th>
        </tr>
        </thead>
        <tbody>

        @foreach ($list as $item)
            <tr>
                <td class="border px-4 py-2">{{ $item->name }}</td>
                <td class="border px-4 py-2">{{ $item->producer }}</td>
                <td class="border px-4 py-2">{{ $item->origin }}</td>
                <td class="border px-4 py-2">{{ $item->taste }}</td>
                <td class="border px-4 py-2">{{ $item->aroma }}</td>


                <div xclass="border px-4 py-3 my-2 text-gray-700">
                    <td class="border px-4 py-2">
                        <button wire:click="deleteItem({{ $item->id }})"
                                class="bg-red-100 text-red-600 px-6 rounded-full">
                            Delete
                        </button>
                    </td>
                </div>
            </tr>
        @endforeach

        </tbody>
    </table>

</div>
