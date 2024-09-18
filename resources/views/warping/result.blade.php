@extends('layouts.app')

@section('title', 'Warping & Sizing Results')

@section('content')
    <h1>Results</h1>
    <p>Total Warp Produced: {{ $total_warp_produced }} yards</p>
    <p>Total Weight of Warp: {{ $total_weight_of_warp }} lbs</p>
@endsection
