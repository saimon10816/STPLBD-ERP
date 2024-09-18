@extends('layouts.app')

@section('title', 'Inventory List')

@section('content')
    <h1>Inventory List</h1>
    <a href="{{ route('inventory.create') }}">Add New Product</a>

    @if($products->isEmpty())
        <p>No products available.</p>
    @else
        <ul>
            @foreach ($products as $product)
                <li>
                    Name: {{ $product->name }},
                    Stock: {{ $product->stock }} units
                </li>
            @endforeach
        </ul>
    @endif
@endsection
