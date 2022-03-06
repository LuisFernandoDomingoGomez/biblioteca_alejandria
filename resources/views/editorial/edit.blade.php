@extends('layouts.app')

@section('template_title')
    Update Editorial
@endsection

@section('content')
    <br><br><br><br>
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Update Editorial</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('editorials.update', $editorial->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('editorial.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
