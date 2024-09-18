@extends('layouts.app')

@section('title', 'Add Customer')

@section('content')
    <h1>Add New Customer</h1>

    <form method="POST" action="{{ route('customers.store') }}">
        @csrf
        <label for="name">Customer Name:</label>
        <input type="text" name="name" id="name" required>

        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required>

        <label for="phone">Phone:</label>
        <input type="text" name="phone" id="phone" required>

        <label for="address">Address (optional):</label>
        <textarea name="address" id="address"></textarea>

        <button type="submit">Add Customer</button>
    </form>
@endsection
