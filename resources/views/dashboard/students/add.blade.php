@extends('layouts.dashboard')

@section('title', 'Add Student - Dashboard')

@section('content')
    <form class="d-flex flex-column gap-4 justify-content-center" method="POST" action="/students/create">
        @csrf
        <div class="mb-3">
            <label for="nis" class="form-label">NIS</label>
            <input type="number" name="nis" class="form-control" value="{{ old('nis') }}" min="0">
        </div>
        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" name="nama" class="form-control" value="{{ old('nama') }}">
        </div>
        <div class="mb-3">
            <label for="kelas_id" class="form-label">Kelas</label>
            <select name="kelas_id" class="form-select">
                @foreach ($classes as $class)
                    <option value="{{ $class->id }}" name="kelas_id">{{ $class->nama }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
            <input type="date" name="tanggal_lahir" class="form-control" value="{{ old('tanggal_lahir') }}">
        </div>
        <div class="mb-3">
            <label for="alamat" class="form-label">Alamat</label>
            <input type="text" name="alamat" class="form-control" value="{{ old('alamat') }}">
        </div>
        <button class="btn btn-primary" type="submit">Submit</button>
    </form>
@endsection
