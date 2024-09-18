@extends('layouts.app')

@section('title', 'Warping List')

@section('content')
    <h1>Warping List</h1>
    <a href="{{ route('warpings.create') }}">Add New Warping Data</a>
    <ul>
        @foreach ($warpings as $warping)
            <li>Total Warp Produced: {{ $warping->total_warp_produced }} yards, Total Weight: {{ $warping->total_weight_of_warp }} lbs</li>
        @endforeach
    </ul>
@endsection
