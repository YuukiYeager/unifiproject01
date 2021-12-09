@extends('layouts.main')
@section('container')
    <h1>Halaman about</h1>
    <h3>{{ $name }}</h3>
    <h5>{{ $email }}</h5>
    <img src="img/{{ $image }}" alt="{{ $name }}" width="200" class="img-thumbnail rounded-circle">
@endsection
