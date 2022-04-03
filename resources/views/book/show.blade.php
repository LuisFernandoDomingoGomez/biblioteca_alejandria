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
                            <span class="card-title">{{ $book->name }} -</span>
                            <span class="card-title">{{ $book->author->name }}</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('books.index') }}"> Atrás</a>
                        </div>
                    </div>
                    <div class="d-grid gap-2">
                        <center><iframe width="700" height="800" src="{{asset($book->pdf)}}#toolbar=0" frameborder="0"></iframe></center>
                    </div>
                </div>
            </div>
    </section>
@endsection
