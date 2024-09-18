@extends('layouts.app')

@section('title', 'Sales List')

@section('content')
    <h1>Sales List</h1>
    <a href="{{ route('sales.create') }}">Add New Sale</a>

    @if($sales->isEmpty())
        <p>No sales available.</p>
    @else
        <ul>
            @foreach ($sales as $sale)
                <li>
                    Customer: {{ $sale->customer_name }},
                    Amount: ${{ $sale->total_amount }},
                    Date: {{ $sale->sale_date }}
                </li>
            @endforeach
        </ul>
    @endif
@endsection
