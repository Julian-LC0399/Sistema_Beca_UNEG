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
                                <a href="{{ route('stu-becas.export') }}" class="btn btn-success btn-sm float-right mx-2">
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
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>ID</th>

									<th >Cédula del estudiante</th>
									<th >Beca</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($stuBecas as $stuBeca)
                                        <tr>
                                            <td>{{ ++$i }}</td>

										<td >{{ $stuBeca->student->Identification_card }}</td>
										<td >{{ $stuBeca->beca->Type }}</td>

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
                {!! $stuBecas->withQueryString()->links() !!}
            </div>
        </div>
    </div>
@endsection
