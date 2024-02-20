@extends('layouts.dashboard')

@section('title', 'Dashboard')

@section('content')
    <h1>Hello, {{ auth()->user()->name }}</h1>
    <img src="/img/aurora.jpg" alt="aurora" class="img-fluid mb-4 object-fit-cover">
    <style>
        /* .gallery {
                                    width: 80%;
                                } */
    </style>
@endsection
