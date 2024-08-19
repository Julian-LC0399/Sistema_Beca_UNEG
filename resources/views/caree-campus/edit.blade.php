@extends('layouts.app')

@section('template_title')
    {{ __('Update') }} Caree Campus
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Actualizar') }} registro de carrera y su sede</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('caree-campuses.update', $careeCampus->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('caree-campus.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection