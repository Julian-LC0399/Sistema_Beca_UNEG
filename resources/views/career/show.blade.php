@extends('layouts.app')

@section('template_title')
    {{ $career->name ?? __('Show') . " " . __('Career') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Vista de datos') }} de la carrera</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('careers.index') }}"> {{ __('Volver') }}</a>
                        </div>
                    </div>

                    <div class="card-body">

                                <div class="form-group mb-2 mb20">
                                    <strong>Institución:</strong>
                                    {{ $career->institution->Name }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Nombre:</strong>
                                    {{ $career->Name }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
