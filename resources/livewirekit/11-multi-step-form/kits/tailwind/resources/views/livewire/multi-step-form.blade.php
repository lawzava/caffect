<div>

    <div class="flex">
        <button type="button" wire:click.prevent="changeStep(1)" class="{{ $currentStep == 1 ? 'rounded-sm border border-b-0' : 'border-b' }} focus:outline-none outline-none cursor-pointer border-indigo-500 p-2 bg-gray-100 text-gray-700">From</button>
        <button type="button" wire:click.prevent="changeStep(2)" class="{{ $currentStep == 2 ? 'rounded-sm border border-b-0' : 'border-b' }} focus:outline-none outline-none cursor-pointer border-indigo-500 p-2 bg-gray-100 text-gray-700" {{ $maxStep < 2 ? ' disabled' : '' }}>To</button>
        <button type="button" wire:click.prevent="changeStep(3)" class="{{ $currentStep == 3 ? 'rounded-sm border border-b-0' : 'border-b' }} focus:outline-none outline-none cursor-pointer border-indigo-500 p-2 bg-gray-100 text-gray-700" {{ $maxStep < 3 ? ' disabled' : '' }}>Passengers</button>
        <div class="border-b border-indigo-500 flex-grow"></div>
    </div>
    <form class="mt-2" wire:submit.prevent="nextStep">
        @if($currentStep == 1)
            <div>
                <label for="from-country" class="block text-black-500 mt-3">From Country</label>
                <select id="from-country" class="mt-2 w-full border rounded-md p-1 focus:outline-none @error('from_country')border-red-500 @else border-indigo-500 @endif" wire:model="from_country">
                    <option value="">--</option>
                    @foreach($countries as $country)
                        <option value="{{ $country->id }}">{{ $country->name }}</option>
                    @endforeach
                </select>
                @error('from_country')
                <div class="mt-1 text-red-500 text-sm">{{ $message }}</div>
                @enderror
            </div>
            <div>
                <label for="from-city" class="block text-black-500 mt-3">From City</label>
                <select id="from-city" class="mt-2 w-full border rounded-md p-1 focus:outline-none @error('from_city')border-red-500 @else border-indigo-500 @endif" wire:model="from_city">
                    <option value="">--</option>
                    @foreach($fromCities as $city)
                        <option value="{{ $city['id'] }}">{{ $city['name'] }}</option>
                    @endforeach
                </select>
                @error('from_city')
                <div class="mt-1 text-red-500 text-sm">{{ $message }}</div>
                @enderror
            </div>
        @elseif($currentStep == 2)
            <div>
                <label for="to-country" class="block text-black-500 mt-3">To Country</label>
                <select id="to-country" class="mt-2 w-full border rounded-md p-1 focus:outline-none @error('to_country')border-red-500 @else border-indigo-500 @endif" wire:model="to_country">
                    <option value="">--</option>
                    @foreach($countries as $country)
                        <option value="{{ $country->id }}">{{ $country->name }}</option>
                    @endforeach
                </select>
                @error('to_country')
                <div class="mt-1 text-red-500 text-sm">{{ $message }}</div>
                @enderror
            </div>

            <div>
                <label for="to-city" class="block text-black-500 mt-3">To City</label>
                <select id="to-city" class="mt-2 w-full border rounded-md p-1 focus:outline-none @error('to_city')border-red-500 @else border-indigo-500 @endif" wire:model="to_city">
                    <option value="">--</option>
                    @foreach($toCities as $city)
                        <option value="{{ $city['id'] }}">{{ $city['name'] }}</option>
                    @endforeach
                </select>
                @error('to_city')
                <div class="mt-1 text-red-500 text-sm">{{ $message }}</div>
                @enderror
            </div>
        @else
            <div>
                <label for="adults" class="block text-black-500 mt-3">Adults</label>
                <input type="number" id="adults" class="mt-2 w-full border rounded-md p-1 focus:outline-none @error('adults')border-red-500 @else border-indigo-500 @endif" wire:model="adults"/>
                @error('adults')
                <div class="mt-1 text-red-500 text-sm">{{ $message }}</div>
                @enderror
            </div>
            <div>
                <label for="children" class="block text-black-500 mt-3">Children</label>
                <input type="number" id="children" class="mt-2 w-full border rounded-md p-1 focus:outline-none @error('children')border-red-500 @else border-indigo-500 @endif" wire:model="children"/>
                @error('children')
                <div class="mt-1 text-red-500 text-sm">{{ $message }}</div>
                @enderror
            </div>
            <p class="mt-3">
                Price: <strong>${{ number_format($price, 2) }}</strong>
            </p>
        @endif

        <div class="form-group">
            <button type="submit" class="text-white bg-indigo-500 border border-indigo-600 rounded-md mt-3 p-1 focus:outline-none">
                @if ($currentStep < 3)
                    Next
                @else
                    Calculate Price
                @endif
            </button>
        </div>
    </form>
</div>

