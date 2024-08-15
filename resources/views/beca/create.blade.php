@extends('layouts.app')

@section('template_title')
    {{ __('Create') }} Beca
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Registro') }} de beca</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('becas.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('beca.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection