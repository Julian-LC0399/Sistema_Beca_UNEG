<div class="row padding-1 p-1">
    <div class="col-md-12">

        <div class="form-group mb-2 mb20">
            <label for="name" class="form-label">{{ __('Nombre') }}</label>
            <input type="text" name="Name" class="form-control @error('Name') is-invalid @enderror" value="{{ old('Name', $campus?->Name) }}" id="name" placeholder="Ingrese el nombre">
            {!! $errors->first('Name', '<div class="invalid-feedback" role="alert"><strong>El campo nombre es obligatorio</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="address" class="form-label">{{ __('Dirección') }}</label>
            <input type="text" name="Address" class="form-control @error('Address') is-invalid @enderror" value="{{ old('Address', $campus?->Address) }}" id="address" placeholder="Ingrese la dirección">
            {!! $errors->first('Address', '<div class="invalid-feedback" role="alert"><strong>El campo dirección es obligatorio</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Registrar') }}</button>
    </div>
</div>
