@extends('layouts.template')

@section('title')
    New Product
@endsection

@section('content')
    <a href="{{ route('products.index') }}">List</a>    
    <h1 class="">New Product</h1>
    <form action="{{ route('products.store') }}" method="POST">
        @csrf
        <label>
            <br>Name:<br>
            <input type="text" name="name" value="{{old('name')}}">
        </label>
        @error('name')
            <br>
            <small>
                *{{$message}}
            </small>
            <br>
        @enderror
        <label>
            <br> Price: <br>
            <input type="number" name="price" value="{{old('price')}}">
        </label>
        @error('price')
            <br>
            <small>
                *{{$message}}
            </small>
            <br>
        @enderror
                
        <br>
        <button type="submit">Create</button>    
    </form>    
@endsection