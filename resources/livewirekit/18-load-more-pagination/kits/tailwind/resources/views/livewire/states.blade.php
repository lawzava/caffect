<div>
    <div class="mb-4 px-4 py-3 leading-normal text-blue-700 bg-blue-100 rounded-lg" role="alert">
        This simple table shows 5 records. Click "Load more..." and see what happens.
    </div>
    <table class="min-w-full mb-4">
        <thead>
        <tr>
            <th class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 tracking-wider">State Name</th>
        </tr>
        </thead>
        <tbody class="bg-white">
        @foreach ($states as $state)
            <tr>
                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500 text-sm leading-5">{{ $state->name }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>

    @if ($showLoadMoreButton)
        <button wire:click="loadmore"
                type="button"
                class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">Load more...</button>
    @endif
</div>
