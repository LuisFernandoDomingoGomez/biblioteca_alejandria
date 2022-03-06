@extends('layouts.app')

@section('template_title')
    Create Editorial
@endsection

@section('content')
    <br><br><br><br>
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Create Editorial</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('editorials.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('editorial.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
