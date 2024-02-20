@extends('layouts.dashboard')

@section('title', 'Add Class - Dashboard')

@section('content')
    <form class="d-flex flex-column gap-4 justify-content-center" method="POST" action="/classes/create">
        @csrf

        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" name="nama" class="form-control" value="{{ old('nama') }}">
        </div>

        <button class="btn btn-primary" type="submit">Submit</button>
    </form>
@endsection
