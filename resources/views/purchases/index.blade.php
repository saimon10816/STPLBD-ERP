@extends('layouts.app')

@section('title', 'Purchase List')

@section('content')
    <h1>Purchase List</h1>
    <a href="{{ route('purchases.create') }}">Add New Purchase</a>

    @if($purchases->isEmpty())
        <p>No purchases available.</p>
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
