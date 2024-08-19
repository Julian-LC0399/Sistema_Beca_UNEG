<div class="row padding-1 p-1">
    <div class="col-md-12">

        <div class="form-group mb-2 mb20">
            <label for="student_id" class="form-label">{{ __('Id del estudiante') }}</label>
            <input type="text" name="Student_id" class="form-control @error('Student_id') is-invalid @enderror" value="{{ old('Student_id', $stuCareer?->Student_id) }}" id="student_id" placeholder="Student Id">
            {!! $errors->first('Student_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="career_id" class="form-label">{{ __('Id de la carrera') }}</label>
            <input type="text" name="Career_id" class="form-control @error('Career_id') is-invalid @enderror" value="{{ old('Career_id', $stuCareer?->Career_id) }}" id="career_id" placeholder="Career Id">
            {!! $errors->first('Career_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Registrar') }}</button>
    </div>
</div>
