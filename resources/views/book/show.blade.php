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

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Categoria:</strong>
                            {{ $book->category_id }}
                        </div>
                        <div class="form-group">
                            <strong>Editorial:</strong>
                            {{ $book->editorial_id }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $book->name }}
                        </div>
                        <div class="form-group">
                            <strong>Autor:</strong>
                            {{ $book->author_id }}
                        </div>
                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            {{ $book->description }}
                        </div>
                        <div class="form-group">
                            <strong>Portada:</strong>
                            {{ $book->image }}
                        </div>
                        <div class="form-group">
                            <strong>Pdf:</strong>
                            {{ $book->pdf }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
