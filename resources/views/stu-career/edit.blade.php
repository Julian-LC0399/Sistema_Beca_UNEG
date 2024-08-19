@extends('layouts.app')

@section('template_title')
    {{ __('Update') }} Stu Career
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Actualizar') }} registro de estudiante y su carrera</span>
                    </div>
                    <div class="card-body bg-white">
                        <form method="POST" action="{{ route('stu-careers.update', $stuCareer->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('stu-career.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
