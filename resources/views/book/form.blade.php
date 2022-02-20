<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('categoria') }}
            {{ Form::select('category_id', $categories, $book->category_id, ['class' => 'form-control' . ($errors->has('category_id') ? ' is-invalid' : ''), 'placeholder' => 'Category Id']) }}
            {!! $errors->first('category_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>

        <div class="form-group">
            {{ Form::label('editorial') }}
            {{ Form::text('editorial', $book->editorial, ['class' => 'form-control' . ($errors->has('editorial') ? ' is-invalid' : ''), 'placeholder' => 'Editorial']) }}
            {!! $errors->first('editorial', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nombre') }}
            {{ Form::text('name', $book->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Name']) }}
            {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('autor') }}
            {{ Form::text('author', $book->author, ['class' => 'form-control' . ($errors->has('author') ? ' is-invalid' : ''), 'placeholder' => 'Author']) }}
            {!! $errors->first('author', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('descripcion') }}
            {{ Form::text('description', $book->description, ['class' => 'form-control' . ($errors->has('description') ? ' is-invalid' : ''), 'placeholder' => 'Description']) }}
            {!! $errors->first('description', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Portada') }}
            {{ Form::text('image', $book->image, ['class' => 'form-control' . ($errors->has('image') ? ' is-invalid' : ''), 'placeholder' => 'Image']) }}
            {!! $errors->first('image', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('pdf') }}
            {{ Form::text('pdf', $book->pdf, ['class' => 'form-control' . ($errors->has('pdf') ? ' is-invalid' : ''), 'placeholder' => 'Pdf']) }}
            {!! $errors->first('pdf', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>