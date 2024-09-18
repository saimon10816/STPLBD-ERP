@extends('layouts.app')

@section('title', 'Add Product')

@section('content')
    <h1>Add New Product</h1>

    <form method="POST" action="{{ route('inventory.store') }}">
        @csrf
        <div>
            <label for="name">Product Name:</label>
            <input type="text" name="name" id="name" required>
        </div>

        <div>
            <label for="stock">Stock Quantity:</label>
            <input type="number" name="stock" id="stock" required>
        </div>

        <button type="submit">Add Product</button>
    </form>
@endsection
