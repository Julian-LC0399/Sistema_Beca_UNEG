<div class="row padding-1 p-1">
    <div class="col-md-12">

        <div class="form-group mb-2 mb20">
            <label for="career_id" class="form-label">{{ __('Id de carrera') }}</label>
            <input type="text" name="Career_id" class="form-control @error('Career_id') is-invalid @enderror" value="{{ old('Career_id', $careeCampus?->Career_id) }}" id="career_id" placeholder="Career Id">
            {!! $errors->first('Career_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="campus_id" class="form-label">{{ __('Id de sede') }}</label>
            <input type="text" name="Campus_id" class="form-control @error('Campus_id') is-invalid @enderror" value="{{ old('Campus_id', $careeCampus?->Campus_id) }}" id="campus_id" placeholder="Campus Id">
            {!! $errors->first('Campus_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Registrar') }}</button>
    </div>
</div>
