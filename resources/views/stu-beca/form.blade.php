<div class="row padding-1 p-1">
    <div class="col-md-12">
        <div class="mb-3">
            <label for="identification_card" class="form-label">{{ __('Cédula del estudiante') }}</label>
            <input type="text" name="identification_card" class="form-control @error('identification_card') is-invalid @enderror" value="{{ old('identification_card', $stuBeca?->student?->Identification_card) }}" id="identification_card" placeholder="Ingrese la cédula del estudiante">
            @error('identification_card')
                <div class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="beca_id" class="form-label">Tipo de Beca</label>
            <select class="form-select @error('Beca_id') is-invalid @enderror" id="beca_id" name="Beca_id">
                <option value="" selected>Seleccione el tipo de beca</option>
                @foreach ($becas as $beca)
                    <option value="{{ $beca->id }}" @if(old('Beca_id', $stuBeca?->Beca_id) == $beca->id) selected @endif>
                        {{ $beca->Type }}
                    </option>
                @endforeach
            </select>
            @error('Beca_id')
                <div class="invalid-feedback" role="alert">
                    <strong>Por favor, seleccione un tipo de beca válido</strong>
                </div>
            @enderror
        </div>
    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">
            @if (isset($stuBeca))
                {{ __('Actualizar') }}
            @else
                {{ __('Registrar') }}
            @endif
        </button>
    </div>
</div>
