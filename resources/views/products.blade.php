@extends('layouts.main')

@section('title', 'Produtos')

@section('content')
    <h1>Tabela de produtos</h1>
    @if ($search != '')
        <p>Resultados da busca para: {{ $search }}</p>
    @endif;
@endsection
