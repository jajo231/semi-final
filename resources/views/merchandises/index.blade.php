@extends('base')

@section('content')

<div class="float-end">
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addModal">
        <i class="fa-solid fa-circle-plus"></i>Add Product
    </button>
</div>

<h1>Products</h1>

<table class="table table-bordered">
    <thead>
        <tr class="bg-primary text-white">
            <th>name</th>
            <th>discription</th>
            <th>quantity</th>
            <th>price</th>
            <th class="text-center">Edit</th>
            <th class="text-center">Delete</th>
        </tr>
        <style>
            .table{
                box-shadow: 10px 10px 20px 1px rgba(0, 0, 0, 0.199);
                font-family: sans-serif
            }
        </style>
    </thead>
    <tbody>

        @foreach($merchandises as $merchandise)
            <tr>
                <td>{{$merchandise->name}}</td>
                <td>{{$merchandise->discription}}</td>
                <td>{{$merchandise->quantity}}</td>
                <td class="text-end">{{$merchandise->price}}</td>
                <td class="text-center">
                    <a href="{{url('/edit-merchandise/' . $merchandise->id)}}" class="btn btn-success">
                        <i class="""></i>Edit
                </a></td>
                <td class="text-center">
                    <a href="{{url('/delete-merchandise/'. $merchandise->id)}}" class="btn btn-danger">
                        <i class=""></i>Delete
                </a></td>
            </tr>
        @endforeach

    </tbody>
</table>

<div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Add to Product List</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="d-grid gap-4 col-8 mx-auto">
                {{-- <a href="{{url('/merchandises/create')}}" class="btn btn-primary"><i class="fa-solid fa-user-plus"></i>Add</a>
                <a href="{{url('/merchandises/edit')}}" class="btn btn-success"><i class="fa-solid fa-user-pen"></i>Edit</a>
                <button type="button" class="btn btn-danger">Delete</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> --}}

                <h1>Add Product</h1>

                <div class="row">
                    <div class="col-md-12">
                        {!! Form::open(['url'=>'/merchandises', 'method'=>'post']) !!}

                        <div class="mb-3">
                            {!! Form::label("name", "Name:") !!}
                            {!! Form::text("name", null, ['class'=>'form-control','placeholder'=>""]) !!}
                        </div>

                        <div class="mb-3">
                            {!! Form::label("discription", "Discription:") !!}
                            {!! Form::text("discription", null, ['class'=>'form-control','placeholder'=>""]) !!}
                        </div>

                        <div class="mb-3">
                            {!! Form::label("quantity", "Quantity:") !!}
                            {!! Form::number("quantity", null, ['class'=>'form-control','placeholder'=>""]) !!}
                        </div>

                        <div class="mb-3">
                            {!! Form::label("price", "Price:") !!}
                            {!! Form::text("price", null, ['class'=>'form-control','placeholder'=>""]) !!}
                        </div>

                        <button class="btn btn-primary" type="submit">Save Changes</button>

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
      </div>
    </div>
</div>



@endsection
