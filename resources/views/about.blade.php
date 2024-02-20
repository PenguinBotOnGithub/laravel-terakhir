@extends('layouts.main')

@section('content')
 <h1>Ini halaman about</h1>
    <img src={{ $foto }} />
    <h2>{{ $nama }}</h2>
    <h3>{{ $kelas }}</h3>       
@endsection