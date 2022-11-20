@extends('base')

@section('content')

    <h1>Delete this Product?</h1>

    <div class="row w-50">
        <div class="col md-5 ">
            {!! Form::model($merchandises, ['url'=>'/edit-merchandise/' . $merchandises->id]) !!}
                <div class="infos">
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

                </div>

            </div>

            {!! Form::close() !!}

            <form action="{{url('/confirmdelete-merchandise/'.$merchandises->id)}}" method="post">
                {{ method_field('DELETE')}}
                {{ csrf_field()}}
                <div class="form-group float-end">
                    <button href="" class="btn btn-success m-1" type="submit"> <i class="fa fa-check" aria-hidden="true"></i> &nbsp; Yes</button>
                    <a href="/" class="btn btn-warning m-1"> <i class="fa fa-times" aria-hidden="true"></i> &nbsp; No</a>
                </div>

            </form>

        </div>
    </div>
@endsection
