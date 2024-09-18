@extends('layouts.app')

@section('title', 'Add Sale')

@section('content')
    <h1>Add New Sale</h1>

    <form method="POST" action="{{ route('sales.store') }}">
        @csrf
        <div>
            <label for="customer_name">Customer Name:</label>
            <input type="text" name="customer_name" id="customer_name" required>
        </div>

        <div>
            <label for="total_amount">Total Amount:</label>
            <input type="number" name="total_amount" id="total_amount" required>
        </div>

        <div>
            <label for="sale_date">Sale Date:</label>
            <input type="date" name="sale_date" id="sale_date" required>
        </div>

        <button type="submit">Add Sale</button>
    </form>
@endsection
