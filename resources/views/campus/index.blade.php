@extends('layouts.app')

@section('template_title')
    Sedes
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Sedes') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('campuses.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Crear registro') }}
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
									<th >Nombre</th>
									<th >Dirección</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($campuses as $campus)
                                        <tr>
                                            <td>{{ ++$i }}</td>

										<td >{{ $campus->institution->Name }}</td>
										<td >{{ $campus->Name }}</td>
										<td >{{ $campus->Address }}</td>

                                            <td>
                                                <form action="{{ route('campuses.destroy', $campus->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('campuses.show', $campus->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Ver') }}</a>
                                                    <a class="btn btn-sm btn-info" href="{{ route('campuses.edit', $campus->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Editar') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm" onclick="event.preventDefault(); confirm('Are you sure to delete?') ? this.closest('form').submit() : false;"><i class="fa fa-fw fa-trash"></i> {{ __('Borrar') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $campuses->withQueryString()->links() !!}
            </div>
        </div>
    </div>
@endsection
