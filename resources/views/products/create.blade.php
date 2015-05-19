@extends('app')

@section('content')
    <div class="container">
        <h1>Create Product</h1>

        @if($errors->any())
            <ul class="alert">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif

        {!! Form::open(['route'=>'products.store','method'=>'post']) !!}

        <div class="form-group">
            {!! Form::label('category','Category:') !!}
            {!! Form::select('category_id',$categories, null,['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('name','Name:') !!}
            {!! Form::text('name',null,['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('description','Description:') !!}
            {!! Form::textarea('description',null,['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('price','Price:') !!}
            {!! Form::text('price',null,['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('featured','Featured:') !!}
            {!! Form::checkbox('featured',1,false) !!}
        </div>

        <div class="form-group">
            {!! Form::label('recommend','Recommend:') !!}
            {!! Form::checkbox('recommend',1,false) !!}
        </div>

        <div class="form-group">
            {!! Form::label('tags','Tags:') !!}
            {!! Form::textarea('tags',null,['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::submit('Add Product',['class'=>'btn btn-primary']) !!}
            {!! link_to(route('products'), 'Cancel', ['class' => 'btn btn-default']) !!}
        </div>

        {!! Form::close() !!}
    </div>
@endsection

