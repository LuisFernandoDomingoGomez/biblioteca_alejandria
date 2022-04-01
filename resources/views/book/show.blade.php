@extends('layouts.app')

@section('template_title')
    {{ $book->name ?? 'Mostrar Libro' }}
@endsection

@section('content')
    <br><br><br><br>
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Mostrar Libro</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('books.index') }}"> Atrás</a>
                        </div>
                    </div>

                    <div class="row g-0">
                        <div class="col-md-3">
                            <img src="{{asset($book->image)}}"
                            height= '200px'
                            width= '255px'
                            class="img-fluid rounded-start" alt="...">
                        </div>

                        <div class="col-md-8">
                            <div class="card-body">
                                <div class="form-group">
                                    <strong>Categoria:</strong>
                                    {{ $book->category->name }}
                                </div>
                                <div class="form-group">
                                    <strong>Editorial:</strong>
                                    {{ $book->editorial->name }}
                                </div>
                                <div class="form-group">
                                    <strong>Nombre:</strong>
                                    {{ $book->name }}
                                </div>
                                <div class="form-group">
                                    <strong>Autor:</strong>
                                    {{ $book->author->name }}
                                </div>
                                <div class="form-group">
                                    <strong>Descripcion:</strong>
                                    {{ $book->description }}
                                </div>
                                <div class="d-grid gap-2">
                                    <a href="{{asset('archivos/' . $book->pdf)}}">
                                        <button type="button" class="btn btn-secondary btn-lg">Leer</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
