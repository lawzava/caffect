<form wire:submit.prevent="save">
    @if ($messageText != '')
        <div class="alert alert-info">
            {{ $messageText }}
        </div>
    @endif
    <div class="form-group row">
        <label for="name" class="col-md-4 col-form-label text-md-right">
            Product name
        </label>
        <div class="col-md-6">
        <input wire:model="name" type="text"
               class="form-control @error('name') is-invalid @enderror"/>
        @error('name')
        <span class="invalid-feedback" role="alert">{{ $message }}</span>
        @enderror
        </div>
    </div>
    <div class="form-group row">
        <label for="description" class="col-md-4 col-form-label text-md-right">
            Product description
        </label>
        <div class="col-md-6">
        <textarea wire:model="description" class="form-control @error('description') is-invalid @enderror"></textarea>
        @error('description')
        <span class="invalid-feedback" role="alert">{{ $message }}</span>
        @enderror
        </div>
    </div>
    <div class="form-group row mb-0">
        <div class="col-md-8 offset-md-4">
            <button type="submit" class="btn btn-primary">
                Add Product
            </button>
        </div>
    </div>
</form>
