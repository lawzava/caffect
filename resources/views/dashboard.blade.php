<x-app-layout>
    <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
        <div x-data={show:false}>
            <div class="flex justify-end">
                <a x-on:click.prevent="show=!show"
                   class="bg-yellow-900 text-white rounded hover:bg-yellow-900-500 px-4 py-3 cursor-pointer focus:outline-none mr-2">
                    Add New Coffee
                </a>
            </div>

            <div x-show="show" class="border px-4 py-3 my-2 text-gray-700">
                @livewire('coffee.form')
            </div>
        </div>
    </div>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                @livewire('coffee.summary')
            </div>
        </div>
    </div>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    @livewire('coffee.show')
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
