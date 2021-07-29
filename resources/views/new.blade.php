@extends('layouts.main')

@section('title', 'Agenda')

@section('content')

<h1>Novo Contato</h1>
<form action="post">
    <input type="text" placeholder="Nome completo"/>
    <input type="email" placeholder="Email"/>
</form>

@endsection