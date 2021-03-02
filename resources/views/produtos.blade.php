@extends('layouts.main')

@section('title','Estoque')

@section('content')

@if($busca != '')
<h1>Cliente buscando o produto {{ $busca }}</h1>
@else
<h1>Nenhum produto buscado</h1>
@endif

@endsection