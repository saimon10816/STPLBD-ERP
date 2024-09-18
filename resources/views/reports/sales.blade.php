@extends('layouts.app')

@section('title', 'Sales Report')

@section('content')
    <h1>Sales Report</h1>

    @if($sales->isEmpty())
        <p>No sales data available.</p>
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
