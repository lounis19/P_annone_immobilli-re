


<div class="form-group">
    <select class="form-control" name="country" id="country" wire:model="country">
        <option value="">Country</option>
        @foreach( $countries as $country)
            <option value="{{ $country->id }}">{{ $country->wilaya_name_ascii }}</option>
        @endforeach
    </select>
</div>
