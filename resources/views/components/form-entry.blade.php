<div class="w-full md:px-3">
    <x-label for="{{ $id }}" value="{{ __($name) }}" />
    <x-input
        class="mt-1 block w-full"
        id="{{ $id }}"
        type="{{ $type }}"
        wire:model.defer="{{ $id }}"
        autocomplete="{{ $id }}"
    />
    <x-input-error for="{{ $id }}" class="mt-2" />
</div>
