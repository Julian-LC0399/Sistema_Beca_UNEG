<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="first_name" class="form-label">{{ __('First Name') }}</label>
            <input type="text" name="First_name" class="form-control @error('First_name') is-invalid @enderror" value="{{ old('First_name', $student?->First_name) }}" id="first_name" placeholder="First Name">
            {!! $errors->first('First_name', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="suname" class="form-label">{{ __('Suname') }}</label>
            <input type="text" name="Suname" class="form-control @error('Suname') is-invalid @enderror" value="{{ old('Suname', $student?->Suname) }}" id="suname" placeholder="Suname">
            {!! $errors->first('Suname', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="identification_card" class="form-label">{{ __('Identification Card') }}</label>
            <input type="text" name="Identification_card" class="form-control @error('Identification_card') is-invalid @enderror" value="{{ old('Identification_card', $student?->Identification_card) }}" id="identification_card" placeholder="Identification Card">
            {!! $errors->first('Identification_card', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="phone" class="form-label">{{ __('Phone') }}</label>
            <input type="text" name="Phone" class="form-control @error('Phone') is-invalid @enderror" value="{{ old('Phone', $student?->Phone) }}" id="phone" placeholder="Phone">
            {!! $errors->first('Phone', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="room_telephone" class="form-label">{{ __('Room Telephone') }}</label>
            <input type="text" name="Room_telephone" class="form-control @error('Room_telephone') is-invalid @enderror" value="{{ old('Room_telephone', $student?->Room_telephone) }}" id="room_telephone" placeholder="Room Telephone">
            {!! $errors->first('Room_telephone', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="email" class="form-label">{{ __('Email') }}</label>
            <input type="text" name="Email" class="form-control @error('Email') is-invalid @enderror" value="{{ old('Email', $student?->Email) }}" id="email" placeholder="Email">
            {!! $errors->first('Email', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="semeter" class="form-label">{{ __('Semeter') }}</label>
            <input type="text" name="Semeter" class="form-control @error('Semeter') is-invalid @enderror" value="{{ old('Semeter', $student?->Semeter) }}" id="semeter" placeholder="Semeter">
            {!! $errors->first('Semeter', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>