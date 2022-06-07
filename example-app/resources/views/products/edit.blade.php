@extends('layouts.template')

@section('title')
    Edit Product
@endsection

@section('content')
    <a href="{{ route('products.index') }}">List</a>    
    <h1 class="">Edit Product</h1>
    <form method="post" action="{{ route('products.update', $product->id) }}" >
        @csrf
        @method('put')
        <label>
            <br>Name: <br>
            <input type="text" name="name" value="{{old('name',$product->name)}}">
        </label>
        @error('name')
            <br>
            <small>
                *{{$message}}
            </small>
            <br>
        @enderror
        <label>
            <br>Price: <br>
            <input type="number" name="price" value="{{old('price', $product->price)}}">
        </label>
        @error('price')
            <br>
            <small>
                *{{$message}}
            </small>
            <br>
        @enderror   
        <br>
        <button type="submit">Update</button>    
    </form>    
@endsection