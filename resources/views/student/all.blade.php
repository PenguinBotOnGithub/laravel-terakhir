@extends('layouts.main')

@section('content')
    @include('components.students.all')
    {{--     <h1>Ini halaman student</h1>
    @if (session()->has('success'))
        <div class="alert alert-success col-lg-12" role="alert">
            {{ session('success') }}
        </div>
    @endif
    <a type="button" class="btn btn-primary" href="/students/add">Add</a>
    <table class="table mt-4 container">
        <tr class="sticky-top">
            <th>ID</th>
            <th>NIS</th>
            <th>Nama</th>
            <th>Kelas</th>
            <th>Actions</th>
        </tr>
        @foreach ($students as $key => $item)
            <tr>
                <td>{{ $key + 1 }}</td>
                <td>{{ $item->nis }}</td>
                <td>{{ $item->nama }}</td>
                <td>{{ $item->kelas->nama }}</td>
                <td>
                    <a type="button" class="btn btn-primary" href="/students/detail/{{ $item->id }}">Detail</a>
                    <a type="button" class="btn btn-warning" href="/students/edit/{{ $item->id }}">Edit</a>
                    <form method="POST" action="/students/delete/{{ $item->id }}" style="display: inline">
                        @method('delete')
                        @csrf
                        <button class="btn btn-danger" onclick="return confirm('Apakah anda yakin?')">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table> --}}
@endsection
