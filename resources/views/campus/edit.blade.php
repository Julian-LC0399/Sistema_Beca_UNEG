@extends('layouts.app')

@section('template_title')
    {{ __('Update') }} Actualizar sede
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Actualizar') }} regidtro de sede</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('campuses.update', $campus->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('campus.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
