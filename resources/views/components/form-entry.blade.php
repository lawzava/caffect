<div class="w-auto pb-2">
    <x-label for="{{ $id }}" value="{{ __($name) }}"/>
    <x-input
        class="block w-full"
        id="{{ $id }}"
        type="{{ $type }}"
        wire:model.defer="{{ $id }}"
        autocomplete="{{ $id }}"
    />
    <x-input-error for="{{ $id }}" class="mt-2"/>
</div>
