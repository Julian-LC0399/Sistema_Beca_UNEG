@extends('layouts.app')

@section('template_title')
    {{ __('Update') }} Stu Campus
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Actualizar') }} Registro de estudiante y su sede</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('stu-campuses.update', $stuCampus->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('stu-campus.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
