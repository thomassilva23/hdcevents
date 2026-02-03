@extends('layouts.main')

@section('title', 'Produto')

@section('content')
    @if ($id != null)
        <h1>Detalhes do Produto {{ $id }}</h1>
    @endif
@endsection
