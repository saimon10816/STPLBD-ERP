@extends('layouts.app')

@section('title', 'Warping & Sizing Calculation')

@section('content')
    <h1>Warping & Sizing Calculation</h1>

    <form method="POST" action="{{ route('warpings.store') }}">
        @csrf
        <label for="production_speed">Production Speed (yards/min):</label>
        <input type="text" name="production_speed" id="production_speed" required>

        <label for="efficiency">Efficiency (%):</label>
        <input type="text" name="efficiency" id="efficiency" required>

        <label for="warp_length">Length of Warp on a Beam (yards):</label>
        <input type="text" name="warp_length" id="warp_length" required>

        <label for="yarn_count">Yarn Count:</label>
        <input type="text" name="yarn_count" id="yarn_count" required>

        <label for="ends">Number of Ends:</label>
        <input type="text" name="ends" id="ends" required>

        <button type="submit">Calculate and Save</button>
    </form>
@endsection
