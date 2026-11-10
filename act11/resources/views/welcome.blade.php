@extends('layouts.app')

@section('title', 'Welcome')

@section('content')
    <h1>This is the Welcome section</h1>
    <p>Welcome to activity 11.</p>
    <p>Hello, {{ $name }}</p>
    @if (count($records) === 1)
        I have one record!
    @elseif (count($records) > 1)
        I have multiple records!
    @else
        I don't have any records!
    @endif
@endsection
