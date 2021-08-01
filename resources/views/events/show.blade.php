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

<div class="flex vertical-space">
    <a href="/"><button class="blue">Voltar</button></a>
    <div class="flex">
        <a style="margin-right: 1rem;" href="/events/edit/{{ $contact->id }}"><button class="green">Editar</button></a>
        <form action="/events/{{ $contact->id }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="red">Deletar</button>
        </form>
    </div>
</div>

@endsection