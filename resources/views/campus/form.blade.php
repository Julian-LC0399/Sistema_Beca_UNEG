<div class="row padding-1 p-1">
    <div class="col-md-12">

        <div class="form-group mb-2 mb20">
            <label for="institution_id" class="form-label">{{ __('Id de la institución') }}</label>
            <input type="text" name="Institution_id" class="form-control @error('Institution_id') is-invalid @enderror" value="{{ old('Institution_id', $campus?->Institution_id) }}" id="institution_id" placeholder="Institution Id">
            {!! $errors->first('Institution_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="name" class="form-label">{{ __('Nombre') }}</label>
            <input type="text" name="Name" class="form-control @error('Name') is-invalid @enderror" value="{{ old('Name', $campus?->Name) }}" id="name" placeholder="Name">
            {!! $errors->first('Name', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="address" class="form-label">{{ __('Dirección') }}</label>
            <input type="text" name="Address" class="form-control @error('Address') is-invalid @enderror" value="{{ old('Address', $campus?->Address) }}" id="address" placeholder="Address">
            {!! $errors->first('Address', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>
