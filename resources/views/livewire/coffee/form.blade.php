<x-form submit="createItem">
    <x-slot name="title">
        {{ __('Create New Coffee Entry') }}
    </x-slot>

    <x-slot name="description">
        {{ __('Create a new item in your coffee list.') }}
    </x-slot>

    <x-slot name="form">
        <div class="mb-4 mt-4">
            <div class="flex flex-col items-center mt-4">
                <x-form-entry name="Name" id="name" type="text" />
                <x-form-entry name="Brewing Method" id="brewing_method" type="text" />
                <x-form-entry name="Roast" id="roast" type="text" />
                <x-form-entry name="Grind" id="grind" type="text" />
                <x-form-entry name="Origin" id="origin" type="text" />
                <x-form-entry name="Producer" id="producer" type="text" />
                <x-form-entry name="Rate Notes" id="notes" type="number" />
                <x-form-entry name="Rate Body" id="body" type="number" />
                <x-form-entry name="Rate Aroma" id="aroma" type="number" />
                <x-form-entry name="Rate Acidity" id="acidity" type="number" />
                <x-form-entry name="Rate Bitterness" id="bitterness" type="number" />
                <x-form-entry name="Rate Sweetness" id="sweetness" type="number" />
            </div>
        </div>
    </x-slot>

    <x-slot name="actions">
        <x-action-message class="mr-3 text-green-700 text-bold" on="saved">
            {{ __('Saved.') }}
        </x-action-message>

        <x-button>
            {{ __('Save') }}
        </x-button>
    </x-slot>
</x-form>
