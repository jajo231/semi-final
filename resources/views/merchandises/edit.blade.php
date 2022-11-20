@extends('base')

@section('content')
<h1>Edit</h1>

<div class="row">
    <div class="col-md-4">
        {!! Form::model($merchandises, ['url'=>'/edit-merchandise/' . $merchandises->id, 'method'=>'put']) !!}

        <div class="mb-3">
            {!! Form::label("name", "Name:") !!}
            {!! Form::text("name", null, ['class'=>'form-control']) !!}
        </div>

        <div class="mb-3">
            {!! Form::label("discription", "Discription:") !!}
            {!! Form::text("discription", null, ['class'=>'form-control']) !!}
        </div>

        <div class="mb-3">
            {!! Form::label("quantity", "Quantity:") !!}
            {!! Form::number("quantity", null, ['class'=>'form-control']) !!}
        </div>

        <div class="mb-3">
            {!! Form::label("price", "Price:") !!}
            {!! Form::text("price", null, ['class'=>'form-control']) !!}
        </div>

        <button class="btn btn-primary" type="submit">Save Changes</button>

        {!! Form::close() !!}
    </div>
</div>
@endsection
