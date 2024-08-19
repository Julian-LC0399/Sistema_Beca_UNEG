@extends('layouts.app')

@section('template_title')
    {{ $stuCampus->name ?? __('Show') . " " . __('Stu Campus') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Vista de datos') }} de estudiante y su sede</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('stu-campuses.index') }}"> {{ __('Volver') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">

                                <div class="form-group mb-2 mb20">
                                    <strong>Cédula del estudiante:</strong>
                                    {{ $stuCampus->student->Identification_card }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Sede:</strong>
                                    {{ $stuCampus->campus->Name }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
