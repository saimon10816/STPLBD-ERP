@extends('layouts.app')

@section('title', 'ERP System Dashboard')

@section('content')
    <h1>Welcome to the ERP System Dashboard</h1>

    <div class="dashboard">
        <h2>Modules</h2>
        <ul>
            <li><a href="{{ route('sales.index') }}">Sales Management</a></li>
            <li><a href="{{ route('inventory.index') }}">Inventory Management</a></li>
            <li><a href="{{ route('warpings.index') }}">Warping & Sizing</a></li>
            <li><a href="{{ route('purchases.index') }}">Purchase Management</a></li>
            <li><a href="{{ route('customers.index') }}">Customer Relationship Management (CRM)</a></li>
            <li><a href="{{ route('reports.sales') }}">Sales Report</a></li>
            <li><a href="{{ route('reports.purchases') }}">Purchase Report</a></li>
        </ul>
    </div>

    <style>
        .dashboard {
            margin-top: 20px;
        }
        .dashboard h2 {
            font-size: 1.5em;
            margin-bottom: 10px;
        }
        .dashboard ul {
            list-style: none;
            padding: 0;
        }
        .dashboard ul li {
            margin: 10px 0;
        }
        .dashboard ul li a {
            text-decoration: none;
            color: #007BFF;
            font-weight: bold;
        }
        .dashboard ul li a:hover {
            text-decoration: underline;
        }
    </style>
@endsection
