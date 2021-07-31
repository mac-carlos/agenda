@extends('layouts.main')

@section('title', 'contato')

@section('content')

<h1>{{ $contact->nome }}</h1>
<p>Data de nascimento: {{ date('d/m/Y', strtotime($contact->nascimento)) }}, CPF: {{ $contact->cpf }}, Email: {{ $contact->email }}</p>
<h2>Telefone</h2>
<ul>
    <li>Celular: {{ $contact->celular }}</li> 
    <li>Comercial: {{ $contact->comercial }}</li>
    <li>Residencial: {{ $contact->residencial }}</li>
</ul>
<h2>Endereço</h2>
<p>{{ $contact->rua }} - {{ $contact->numero }}, {{ $contact->bairro }} - {{ $contact->cep }}</p>
<p>{{ $contact->cidade }} - {{ $contact->estado }}</p>

@endsection