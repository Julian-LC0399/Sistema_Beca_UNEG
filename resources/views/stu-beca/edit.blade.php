@extends('layouts.app')

@section('template_title')
    {{ __('Update') }} Stu Beca
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Actualizar') }} registro de estudiante con beca</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('stu-becas.update', $stuBeca->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('stu-beca.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
