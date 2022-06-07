@extends('layouts.template')

@section('title')
    Product {{$product->name}}
@endsection

@section('content')
    <a href="{{ route('products.index') }}">List</a>    
    <a href="{{ route('products.edit',$product) }}">Edit</a>    
    <h1 class="">Product {{$product->name}}</h1>
        
@endsection