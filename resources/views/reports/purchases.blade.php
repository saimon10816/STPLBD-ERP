@extends('layouts.app')

@section('title', 'Purchase Report')

@section('content')
    <h1>Purchase Report</h1>

    @if($purchases->isEmpty())
        <p>No purchase data available.</p>
    @else
        <ul>
            @foreach ($purchases as $purchase)
                <li>
                    Supplier: {{ $purchase->supplier_name }},
                    Amount: ${{ $purchase->amount }},
                    Date: {{ $purchase->purchase_date }}
                </li>
            @endforeach
        </ul>
    @endif
@endsection
