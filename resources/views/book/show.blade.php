@extends('layouts.app')

@section('template_title')
    {{ $book->name ?? 'Show Book' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Book</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('books.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Category Id:</strong>
                            {{ $book->category_id }}
                        </div>
                        <div class="form-group">
                            <strong>Editorial:</strong>
                            {{ $book->editorial }}
                        </div>
                        <div class="form-group">
                            <strong>Name:</strong>
                            {{ $book->name }}
                        </div>
                        <div class="form-group">
                            <strong>Author:</strong>
                            {{ $book->author }}
                        </div>
                        <div class="form-group">
                            <strong>Description:</strong>
                            {{ $book->description }}
                        </div>
                        <div class="form-group">
                            <strong>Image:</strong>
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
