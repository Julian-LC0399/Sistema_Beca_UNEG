@extends('layouts.app')

@section('template_title')
    Becas
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Becas') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('becas.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
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

									<th >Institución</th>
									<th >Tipo</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($becas as $beca)
                                        <tr>
                                            <td>{{ ++$i }}</td>

										<td >{{ $beca->institution->Name}}</td>
										<td >{{ $beca->Type }}</td>

                                            <td>
                                                <form action="{{ route('becas.destroy', $beca->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('becas.show', $beca->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Ver') }}</a>
                                                    <a class="btn btn-sm btn-info" href="{{ route('becas.edit', $beca->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Editar') }}</a>
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
                {!! $becas->withQueryString()->links() !!}
            </div>
        </div>
    </div>
@endsection
