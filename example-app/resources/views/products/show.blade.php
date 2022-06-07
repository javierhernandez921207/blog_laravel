@extends('layouts.template')

@section('title')
    Product {{$product->name}}
@endsection

@section('content')
    <a href="{{ route('products.index') }}">List</a>    
    <a href="{{ route('products.edit',$product) }}">Edit</a> 
    <h1 class="">Product {{$product->name}}</h1>
    
    <form action="{{route('products.destroy',$product)}}" method="POST">
        @csrf
        @method('delete')
        <button type="submit">Delete</a>     
    </form>
@endsection