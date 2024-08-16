@extends('layouts.app')

@section('template_title')
    {{ __('Update') }} Actulizar estudiante
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __(' Actulizar') }} registro del estudiante</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('students.update', $student->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('student.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
