@extends('layouts.main')

@section('title','Produto')

@section('content')

@if($id != null)
<h1>Produto buscado é {{ $id }}</h1>
@else
<h1>Nenhum produto selecionado</h1>
@endif

@endsection