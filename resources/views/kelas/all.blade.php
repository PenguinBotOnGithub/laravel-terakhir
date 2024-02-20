@extends('layouts.main')

@section('content')
    @include('components.classes.all')
    {{--     <h1>List Kelas</h1>
    @if (session()->has('success'))
        <div class="alert alert-success col-lg-12" role="alert">
            {{ session('success') }}
        </div>
    @endif
    <a type="button" class="btn btn-primary" href="/classes/add">Add</a>
    <table class="table mt-4 container">
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Actions</th>
        </tr>
        @foreach ($classes as $key => $class)
            <tr>
                <td>{{ $key + 1 }}</td>
                <td>{{ $class->nama }}</td>
                <td>
                    <a type="button" class="btn btn-primary" href="/classes/detail/{{ $class->id }}">Detail</a>
                    <a type="button" class="btn btn-warning" href="/classes/edit/{{ $class->id }}">Edit</a>
                    <form method="POST" action="/classes/delete/{{ $class->id }}" style="display: inline">
                        @method('delete')
                        @csrf
                        <button class="btn btn-danger" onclick="return confirm('Apakah anda yakin?')">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table> --}}
@endsection
