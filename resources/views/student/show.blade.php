@extends('layouts.app')

@section('template_title')
    {{ $student->name ?? __('Show') . " " . __('Student') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Student</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('students.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>First Name:</strong>
                                    {{ $student->First_name }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Suname:</strong>
                                    {{ $student->Suname }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Identification Card:</strong>
                                    {{ $student->Identification_card }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Phone:</strong>
                                    {{ $student->Phone }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Room Telephone:</strong>
                                    {{ $student->Room_telephone }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Email:</strong>
                                    {{ $student->Email }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Semeter:</strong>
                                    {{ $student->Semeter }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
