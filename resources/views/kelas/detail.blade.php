@extends('layouts.main')

@section('content')
    @include('components.classes.detail')
    {{-- <form class="d-flex flex-column gap-4 justify-content-center">
        <div class="mb-3">
            <label for="id" class="form-label">ID</label>
            <input type="number" name="id" class="form-control" disabled value="{{ $class->id }}">
        </div>
        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" name="nama" class="form-control" disabled value="{{ $class->nama }}">
        </div>
        <table class="table mt-4 container">
            <tr>
                <th>NIS</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Tanggal Lahir</th>
            </tr>
            @foreach ($class->students as $key => $item)
                <tr>
                    <td>{{ $item->nis }}</td>
                    <td>{{ $item->nama }}</td>
                    <td>{{ $item->alamat }}</td>
                    <td>{{ date_format(date_create($item->tanggal_lahir), 'd / F / Y') }}</td>
                </tr>
            @endforeach
        </table>
        <a type="button" class="btn btn-primary" href="/classes">Back</a>
    </form> --}}
@endsection
