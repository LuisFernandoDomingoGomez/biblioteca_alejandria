@extends('layouts.app')

@section('template_title')
    {{ $editorial->name ?? 'Mostrar Editorial' }}
@endsection

@section('content')
    <br><br><br><br>
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Mostrar Editorial</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('editorials.index') }}"> Atrás</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $editorial->name }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
