@extends('layouts.app')

@section('template_title')
    {{ $careeCampus->name ?? __('Show') . " " . __('Caree Campus') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Vista de datos') }} de carrera y sede a la que pertenese</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('caree-campuses.index') }}"> {{ __('Volver') }}</a>
                        </div>
                    </div>

                    <div class="card-body">

                                <div class="form-group mb-2 mb20">
                                    <strong>Carrera:</strong>
                                    {{ $careeCampus->career->Name  }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Sede:</strong>
                                    {{ $careeCampus->campus->Name }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
