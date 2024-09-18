@extends('layouts.app')

@section('title', 'Customer List')

@section('content')
    <h1>Customer List</h1>
    <a href="{{ route('customers.create') }}">Add New Customer</a>

    @if($customers->isEmpty())
        <p>No customers available.</p>
    @else
        <ul>
            @foreach ($customers as $customer)
                <li>
                    Name: {{ $customer->name }},
                    Email: {{ $customer->email }},
                    Phone: {{ $customer->phone }},
                    Address: {{ $customer->address ?? 'N/A' }}
                </li>
            @endforeach
        </ul>
    @endif
@endsection
