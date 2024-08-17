@extends('layouts.app')

@section('template_title')
    {{ $stuBeca->name ?? __('Show') . " " . __('Stu Beca') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Vista de datos') }} de estudiante y beca asociada</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('stu-becas.index') }}"> {{ __('Volver') }}</a>
                        </div>
                    </div>

                    <div class="card-body">

                                <div class="form-group mb-2 mb20">
                                    <strong>Cédula del estudiante:</strong>
                                    {{ $stuBeca->student->Identification_card }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Beca:</strong>
                                    {{ $stuBeca->beca->Type }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
