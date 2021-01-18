<x-form submit="createItem">
    <x-slot name="title">
        {{ __('Create New Coffee Entry') }}
    </x-slot>

    <x-slot name="description">
        {{ __('Create a new item in your coffee list.') }}
    </x-slot>

    <x-slot name="form">
        <div class="mb-4 mt-4">
            <div class="grid gap-4 grid-cols-1 md:grid-cols-4">
                <x-form-entry name="Name" id="name" type="text"/>
                <x-form-entry name="Producer" id="producer" type="text"/>
                <x-form-entry name="Origin" id="origin" type="text"/>

                <x-form-entry name="Rate Aroma" id="aroma" type="number"/>
                <x-form-entry name="Rate Taste" id="taste" type="number"/>
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
