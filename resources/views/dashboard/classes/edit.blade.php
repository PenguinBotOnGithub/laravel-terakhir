@extends('layouts.dashboard')

@section('title', 'Edit Class - Dashboard')

@section('content')
    <form class="d-flex flex-column gap-4 justify-content-center" method="POST" action="/classes/modify/{{ $class->id }}">
        @csrf

        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" name="nama" class="form-control" value="{{ old('nama', $class->nama) }}">
        </div>
        <button class="btn btn-primary" type="submit">Submit</button>
    </form>
@endsection
