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
        <label>Name: <input type="text" name="name" value="{{$product->name}}"></label><br>
        <label>Price: <input type="number" name="price" value="{{$product->price}}"></label><br>    
        <br>
        <button type="submit">Update</button>    
    </form>    
@endsection