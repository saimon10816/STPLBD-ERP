@extends('layouts.app')

@section('title', 'Add Purchase')

@section('content')
    <h1>Add New Purchase</h1>

    <form method="POST" action="{{ route('purchases.store') }}">
        @csrf
        <div>
            <label for="supplier_name">Supplier Name:</label>
            <input type="text" name="supplier_name" id="supplier_name" required>
        </div>

        <div>
            <label for="amount">Amount:</label>
            <input type="text" name="amount" id="amount" required>
        </div>

        <div>
            <label for="purchase_date">Purchase Date:</label>
            <input type="date" name="purchase_date" id="purchase_date" required>
        </div>

        <button type="submit">Add Purchase</button>
    </form>
@endsection
