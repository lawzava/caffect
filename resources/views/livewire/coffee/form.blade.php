<div x-data="{ show: false }">
    <div class="flex justify-end">
        <a x-on:click.prevent="show=!show">
           <button class="bg-yellow-900 text-white rounded hover:bg-yellow-900-500 px-4 py-3 cursor-pointer focus:outline-none mr-2">
            Add New Coffee
           </button>
        </a>
    </div>

    <div x-show="show" class="border px-4 py-3 my-2 text-gray-700">
        <x-form wire:submit.prevent="createItem">
            @wire
            <x-form-input name="name" label="Name"/>
            <x-form-input name="producer" label="Producer"/>

            <x-form-select name="origin" :options="$countries"/>

            <x-form-input type="number" name="taste" label="Taste"/>
            <x-form-input type="number" name="aroma" label="Aroma"/>
            @endwire

            <div class="mt-6 flex items-center justify-end">
                <button type="submit" class="bg-green-700 hover:bg-green-900 text-white font-bold py-2 px-4 focus:outline-none focus:shadow-outline">
                    Save
                </button>
            </div>
        </x-form>
    </div>
</div>
