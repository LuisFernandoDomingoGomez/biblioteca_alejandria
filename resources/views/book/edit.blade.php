@extends('layouts.app')

@section('template_title')
    Actualizar Libro
@endsection

@section('content')
    <br><br><br><br>
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Actualizar Libro</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('books.update', $book->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('book.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
