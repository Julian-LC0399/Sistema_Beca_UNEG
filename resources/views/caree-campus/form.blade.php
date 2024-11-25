<div class="row padding-1 p-1">
    <div class="col-md-12">
 <script>
        console.log("{{ old('Career_id', $careeCampus?->Career_id) }}");
    </script>

        <div class="mb-3">
            <label for="career_id" class="form-label">Carrera</label>
            <select class="form-select @error('Career_id') is-invalid @enderror" id="career_id" name="Career_id" value="{{ old('Career_id', $careeCampus?->Career_id) }}" id="career_id" placeholder="Career Id">
            
                <option value="" selected>Elige una opción</option>
                @foreach ($careers as $career)
                    <option value="{{$career->id}}" @if (old('Career_id', $careeCampus?->Career_id) == $career->id)
                        selected
                    @endif>{{$career->Name}}</option>
                    {!! $errors->first('Career_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
                @endforeach
            </select>
            {!! $errors->first('Career_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

        <!-- <div class="form-group mb-2 mb20">
            <label for="career_id" class="form-label">{{ __('Id de la carrera') }}</label>
            <input type="text" name="Career_id" class="form-control @error('Career_id') is-invalid @enderror" value="{{ old('Career_id', $careeCampus?->Career_id) }}" id="career_id" placeholder="Career Id">
            {!! $errors->first('Career_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div> -->
        <!-- <div class="form-group mb-2 mb20">
            <label for="campus_id" class="form-label">{{ __('Id de la sede') }}</label>
            <input type="text" name="Campus_id" class="form-control @error('Campus_id') is-invalid @enderror" value="{{ old('Campus_id', $careeCampus?->Campus_id) }}" id="campus_id" placeholder="Campus Id">
            {!! $errors->first('Campus_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div> -->
<div class="mb-3">
            <label for="campus_id" class="form-label">Sede</label>
            <select class="form-select @error('Campus_id') is-invalid @enderror" id="campus_id" name="Campus_id" value="{{ old('Career_id', $careeCampus?->Campus_id) }}" id="campus_id" placeholder="Campus Id">
            
                <option value="" selected>Elige una opción</option>
                @foreach ($campuses as $campus)
                    <option value="{{$campus->id}}" @if (old('Campus_id', $careeCampus?->Campus_id) == $campus->id)
                        selected
                    @endif>{{$campus->Name}}</option>
                    {!! $errors->first('Campus_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
                @endforeach
            </select>
            {!! $errors->first('Campus_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">
            @if ($register == true)
                {{ __('Registrar') }}
            @else
                {{ __('Editar') }}
            @endif
        </button>
    </div>
</div>
