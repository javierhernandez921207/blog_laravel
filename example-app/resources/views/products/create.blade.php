@extends('layouts.template')

@section('title')
    New Product
@endsection

@section('content')
    <a href="{{ route('products.index') }}">List</a>    
    <h1 class="">New Product</h1>
    <form action="{{ route('products.store') }}" method="POST">
        @csrf
        <label>Name: <input type="text" name="name"></label><br>
        <label>Price: <input type="number" name="price"></label><br>    
        <br>
        <button type="submit">Create</button>    
    </form>    
@endsection