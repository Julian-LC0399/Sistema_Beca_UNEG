@extends('layouts.app')

@section('template_title')
    {{ $student->name ?? __('vista') . " " . __('Estudiante') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Vista de datos') }} del estudiante</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('students.index') }}"> {{ __('Volver') }}</a>
                        </div>
                    </div>

                    <div class="card-body">

                                <div class="form-group mb-2 mb20">
                                    <strong>Primer nombre:</strong>
                                    {{ $student->First_name }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Apellido:</strong>
                                    {{ $student->Suname }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Cédula:</strong>
                                    {{ $student->Identification_card }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Teléfono:</strong>
                                    {{ $student->Phone }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Teléfono de habitación:</strong>
                                    {{ $student->Room_telephone }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Correo:</strong>
                                    {{ $student->Email }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Semestre:</strong>
                                    {{ $student->Semeter }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
