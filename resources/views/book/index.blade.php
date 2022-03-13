@extends('layouts.app')

@section('template_title')
    Libros
@endsection

@section('content')
    <br><br><br><br>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Libros') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('books.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Crear Nuevo') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Categoria</th>
										<th>Nombre</th>
										<th>Autor</th>
										<th>Portada</th>
                                        <th>Acciones</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($books as $book)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $book->category->name }}</td>
											<td>{{ $book->name }}</td>
											<td>{{ $book->author->name }}</td>
											<td><img src="{{asset('imagenes/' . $book->image)}}" width="40px"></td>

                                            <td>
                                                <form action="{{ route('books.destroy',$book->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('books.show',$book->id) }}"><i class="fa fa-fw fa-eye"></i></a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('books.edit',$book->id) }}"><i class="fa fa-fw fa-edit"></i></a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i></button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $books->links() !!}
            </div>
        </div>
    </div>
@endsection
