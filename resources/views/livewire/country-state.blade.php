

<div class="form-group">
    <select class="form-control" name="country" id="country" wire:model="wilaya_name_ascii">
        <option value="">Country</option>
        @foreach( $countries as $country)
           <option value="{{ $country->id }}">{{ $country->wilaya_name_ascii }}</option>
        @endforeach
    </select>
</div>
<div class="form-group">
    <select class="form-control" name="state" id="state">
        <option value="">State</option>
        @foreach( $states as $state)
           <option value="{{ $state->id }}">{{ $state->wilaya_name_ascii }}</option>
        @endforeach
    </select>
</div>