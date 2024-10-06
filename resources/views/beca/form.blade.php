<div class="row padding-1 p-1">
    <div class="col-md-12">

        <div class="form-group mb-2 mb20">
            <label for="type" class="form-label">{{ __('Tipo') }}</label>
            <input type="text" name="Type" class="form-control @error('Type') is-invalid @enderror" value="{{ old('Type', $beca?->Type) }}" id="type" placeholder="Type">
            {!! $errors->first('Type', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Registrar') }}</button>
    </div>
</div>
