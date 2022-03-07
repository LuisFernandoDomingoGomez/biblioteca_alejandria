@extends('layouts.app')

@section('template_title')
    {{ $author->name ?? 'Mostrar Autor' }}
@endsection

@section('content')
    <br><br><br><br>
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Mostrar Autor</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('authors.index') }}"> Atrás</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $author->name }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
