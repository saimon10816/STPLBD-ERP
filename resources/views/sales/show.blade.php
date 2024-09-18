@extends('layouts.app')

@section('title', 'Sale Details')

@section('content')
    <h1>Sale Details</h1>

    <p><strong>Customer Name:</strong> {{ $sale->customer_name }}</p>
    <p><strong>Total Amount:</strong> ${{ $sale->total_amount }}</p>
    <p><strong>Sale Date:</strong> {{ $sale->sale_date }}</p>

    <a href="{{ route('sales.index') }}">Back to Sales List</a>
@endsection
