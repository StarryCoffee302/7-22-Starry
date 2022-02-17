@extends('layouts.main')

@section('container')
     <h1>Halaman Home</h1>
     <meta name="csrf-token" content="{{ csrf_token() }}"/>
@endsection