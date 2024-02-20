@extends('layouts.main')

@section('content')
<h1>Ini halaman ekstrakulikuler</h1>
<table class="table">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Nama Pembina</th>
                <th>Deskripsi</th>
            </tr>     
    @foreach ($extra as $i => $item)
            <tr>
                <td>{{$i + 1}}</td>
                <td>{{$item["nama"]}}</td>
                <td>{{$item["nama_pembina"]}}</td>
                <td>{{$item["deskripsi"]}}</td>
            </tr>
    @endforeach
</table>
        
@endsection