@extends('layouts.app')

@section('template_title')
    Stu Becas
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Estudiantes con beca') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('stu-becas.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Crear registro') }}
                                </a>
                                <a href="{{ route('stu-becas.export', [
                                    'beca_id' => request('beca_id'),
                                    'campus_id' => request('campus_id'),
                                    'career_id' => request('career_id')
                                ]) }}" class="btn btn-success btn-sm float-right mx-2">
                                 {{ __('Descargar CSV') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success m-4">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <!-- Add filter form -->
                        <div class="mb-4">
                            <form method="GET" action="{{ route('stu-becas.index') }}" class="form-inline">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="beca_id" class="mr-2">{{ __('Filtrar por beca:') }}</label>
                                            <select name="beca_id" id="beca_id" class="form-control">
                                                <option value="">{{ __('Todas las becas') }}</option>
                                                @foreach($becas as $beca)
                                                    <option value="{{ $beca->id }}" {{ request('beca_id') == $beca->id ? 'selected' : '' }}>
                                                        {{ $beca->Type }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="campus_id" class="mr-2">{{ __('Filtrar por sede:') }}</label>
                                            <select name="campus_id" id="campus_id" class="form-control">
                                                <option value="">{{ __('Todas las sedes') }}</option>
                                                @foreach($campuses as $campus)
                                                    <option value="{{ $campus->id }}" {{ request('campus_id') == $campus->id ? 'selected' : '' }}>
                                                        {{ $campus->Name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="career_id" class="mr-2">{{ __('Filtrar por carrera:') }}</label>
                                            <select name="career_id" id="career_id" class="form-control">
                                                <option value="">{{ __('Todas las carreras') }}</option>
                                                @foreach($careers as $career)
                                                    <option value="{{ $career->id }}" {{ request('career_id') == $career->id ? 'selected' : '' }}>
                                                        {{ $career->Name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <button type="submit" class="btn btn-primary">{{ __('Filtrar') }}</button>
                                        @if(request('beca_id') || request('campus_id') || request('career_id'))
                                            <a href="{{ route('stu-becas.index') }}" class="btn btn-secondary">{{ __('Limpiar') }}</a>
                                        @endif
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- Per page selector -->
                        <div class="mb-3">
                            <form method="GET" action="{{ route('stu-becas.index') }}" class="form-inline" id="perPageForm">
                                <input type="hidden" name="beca_id" value="{{ request('beca_id') }}">
                                <input type="hidden" name="campus_id" value="{{ request('campus_id') }}">
                                <input type="hidden" name="career_id" value="{{ request('career_id') }}">
                                <div class="form-group">
                                    <label for="per_page" class="mr-2">{{ __('Mostrar:') }}</label>
                                    <select name="per_page" id="per_page" class="form-control" onchange="document.getElementById('perPageForm').submit()">
                                        @foreach([10, 25, 50, 100] as $perPage)
                                            <option value="{{ $perPage }}" {{ request('per_page', 10) == $perPage ? 'selected' : '' }}>
                                                {{ $perPage }}
                                            </option>
                                        @endforeach
                                    </select>
                                    <span class="ml-2">{{ __('elementos por página') }}</span>
                                </div>
                            </form>
                        </div>
                        <!-- End per page selector -->
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <!-- <th>ID</th> -->

									<th >Cédula del estudiante</th>
									<th >Beca</th>
									<th >Campus</th>
									<th >Carrera</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($stuBecas as $stuBeca)
                                        <tr>
                                            <!-- <td>{{ ++$i }}</td> -->

										<td >{{ $stuBeca->student->Identification_card }}</td>
										<td >{{ $stuBeca->beca->Type }}</td>
										<td >{{ \App\Models\StuCampus::where('Student_id', $stuBeca->Student_id)->first() ? \App\Models\StuCampus::where('Student_id', $stuBeca->Student_id)->first()->campus->Name : 'Sin campus' }}</td>
										<td >@php
                                            $stuCareer = \App\Models\StuCareer::where('Student_id', $stuBeca->Student_id)->first();
                                            echo $stuCareer ? ($stuCareer->career ? $stuCareer->career->Name : 'Sin carrera') : 'Sin carrera';
                                        @endphp</td>

                                            <td>
                                                <form action="{{ route('stu-becas.destroy', $stuBeca->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('stu-becas.show', $stuBeca->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Ver') }}</a>
                                                    <a class="btn btn-sm btn-info" href="{{ route('stu-becas.edit', $stuBeca->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Editar') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm" onclick="event.preventDefault(); confirm('¿Está seguro de borrar él registro?') ? this.closest('form').submit() : false;"><i class="fa fa-fw fa-trash"></i> {{ __('Borrar') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-center mt-3">
                    {!! $stuBecas->withQueryString()->links('pagination::bootstrap-4') !!}
                </div>
            </div>
        </div>
    </div>

    <style>
        .pagination {
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .pagination li {
            margin: 0 2px;
        }
        .pagination .page-item .page-link {
            padding: 0.375rem 0.75rem;
            font-size: 0.9rem;
            line-height: 1.5;
            border-radius: 0.25rem;
        }
        .pagination .active .page-link {
            background-color: #007bff;
            border-color: #007bff;
        }
        #per_page {
            width: auto;
            display: inline-block;
        }
        .form-inline {
            display: flex;
            align-items: center;
        }
    </style>
@endsection
