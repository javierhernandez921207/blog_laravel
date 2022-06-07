@extends('layouts.template')

@section('title')
    Products
@endsection

@section('content')
    <h1 class="">Products</h1>
    <a href="{{ route('products.create') }}">New</a>    
    <ul>
        @foreach ($products as $product)
            <li><a href="{{ route('products.show', ['product'=>$product]) }}">{{$product->name}}</a></li>
        @endforeach
    </ul>
    {{$products->links()}}
@endsection