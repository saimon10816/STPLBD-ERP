@extends('layouts.app')

@section('title', 'Profile')

@section('content')
    <h1>{{ $user->name }}'s Profile</h1>
    <p><strong>Email:</strong> {{ $user->email }}</p>
    <p><strong>Bio:</strong> {{ $user->profile->bio ?? 'N/A' }}</p>
    <p><strong>Address:</strong> {{ $user->profile->address ?? 'N/A' }}</p>
    <p><strong>Phone:</strong> {{ $user->profile->phone ?? 'N/A' }}</p>
    <p><strong>Avatar:</strong> <img src="{{ asset('storage/' . $user->profile->avatar) }}" alt="Avatar" style="width: 100px; height: 100px;"></p>

    <a href="{{ route('profile.edit') }}" class="btn btn-primary">Edit Profile</a>
@endsection
