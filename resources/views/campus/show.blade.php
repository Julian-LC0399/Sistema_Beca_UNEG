@extends('layouts.app')

@section('template_title')
    {{ $campus->name ?? __('Show') . " " . __('Sede') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('vista de datos') }} de la sede</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('campuses.index') }}"> {{ __('Volver') }}</a>
                        </div>
                    </div>

                    <div class="card-body">

                                <div class="form-group mb-2 mb20">
                                    <strong>Institución:</strong>
                                    {{ $campus->institution->Name }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Nombre:</strong>
                                    {{ $campus->Name }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Dirrección:</strong>
                                    {{ $campus->Address }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
