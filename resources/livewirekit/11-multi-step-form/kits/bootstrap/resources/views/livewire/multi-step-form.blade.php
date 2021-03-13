
<div>
    <ul class="nav nav-tabs">
        <li class="nav-item">
            <a href="#" class="nav-link{{ $currentStep == 1 ? ' active' : '' }}" wire:click.prevent="changeStep(1)">
                From
            </a>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link{{ $currentStep == 2 ? ' active' : '' }}{{ $maxStep < 2 ? ' disabled' : '' }}" wire:click.prevent="changeStep(2)">
                To
            </a>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link{{ $currentStep == 3 ? ' active' : '' }}{{ $maxStep < 3 ? ' disabled' : '' }}" wire:click.prevent="changeStep(3)">
                Passengers
            </a>
        </li>
    </ul>
    <form class="mt-2" wire:submit.prevent="nextStep">
        @if($currentStep == 1)
            <div class="form-group">
                <label for="from-country">From Country</label>
                <select id="from-country" class="form-control @error('from_country')is-invalid @endif" wire:model="from_country">
                    <option value="">--</option>
                    @foreach($countries as $country)
                        <option value="{{ $country->id }}">{{ $country->name }}</option>
                    @endforeach
                </select>
                @error('from_country')
                <p class="invalid-feedback">{{ $message }}</p>
                @enderror
            </div>

            <div class="form-group">
                <label for="from-city">From City</label>
                <select id="from-city" class="form-control @error('from_city')is-invalid @endif" wire:model="from_city">
                    <option value="">--</option>
                    @foreach($fromCities as $city)
                        <option value="{{ $city['id'] }}">{{ $city['name'] }}</option>
                    @endforeach
                </select>
                @error('from_city')
                <p class="invalid-feedback">{{ $message }}</p>
                @enderror
            </div>
        @elseif($currentStep == 2)
            <div class="form-group">
                <label for="to-country">To Country</label>
                <select id="to-country" class="form-control @error('to_country')is-invalid @endif" wire:model="to_country">
                    <option value="">--</option>
                    @foreach($countries as $country)
                        <option value="{{ $country->id }}">{{ $country->name }}</option>
                    @endforeach
                </select>
                @error('to_country')
                <p class="invalid-feedback">{{ $message }}</p>
                @enderror
            </div>

            <div class="form-group">
                <label for="to-city">To City</label>
                <select id="to-city" class="form-control @error('to_city')is-invalid @endif" wire:model="to_city">
                    <option value="">--</option>
                    @foreach($toCities as $city)
                        <option value="{{ $city['id'] }}">{{ $city['name'] }}</option>
                    @endforeach
                </select>
                @error('to_city')
                <p class="invalid-feedback">{{ $message }}</p>
                @enderror
            </div>
        @else
            <div class="form-group">
                <label for="adults">Adults</label>
                <input type="number" id="adults" class="form-control @error('adults')is-invalid @endif" wire:model="adults"/>
                @error('adults')
                <p class="invalid-feedback">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group">
                <label for="children">Children</label>
                <input type="number" id="children" class="form-control @error('children')is-invalid @endif" wire:model="children"/>
                @error('children')
                <p class="invalid-feedback">{{ $message }}</p>
                @enderror
            </div>
            <p>
                Price: <strong>${{ number_format($price, 2) }}</strong>
            </p>
        @endif

        <div class="form-group">
            <button type="submit" class="btn btn-primary">
                @if ($currentStep < 3)
                    Next
                @else
                    Calculate Price
                @endif
            </button>
        </div>
    </form>
</div>

