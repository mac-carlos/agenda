@extends('layouts.main')

@section('title', 'Contatos')

@section('content')

<h1>Contatos</h1>

<div class="flex search vertical-space">
    <form action="/" method="GET">
        <input type="text" id="search" name="search" placeholder="Pesquisar"/>
    </form>
    <a href="/events/new"><button class="blue">Novo contato</button></a>
</div>

@if($search)
    <p>Resultados da pesquisa: {{ $search }}</p>
    @foreach($contacts as $contact)
        <div class="item">
            <p>{{ $contact->nome }}</p>
            <p>Data de nascimento: {{ date('d/m/Y', strtotime($contact->nascimento)) }}</p>
            <p>CPF: {{ $contact->cpf }}</p>
            <p>Email: {{ $contact->email }}</p>
            <p>Celular: {{ $contact->celular }}</p> 
            <p>Comercial: {{ $contact->comercial }}</p>
            <p>Residencial: {{ $contact->residencial }}</p>
            <p>{{ $contact->rua }} - {{ $contact->numero }}, {{ $contact->bairro }} - {{ $contact->cep }}</p>
            <p>{{ $contact->cidade }} - {{ $contact->estado }}</p>
        </div>
    @endforeach
@else
    @foreach($contacts as $contact)
        <a href="/events/{{ $contact->id }}">
            <div class="flex item">
                <p>{{ $contact->nome }} </p> 
                <p>{{ $contact->email }}</p>
            </div>
        </a>
    @endforeach
@endif

@if(count($contacts) == 0 && $search)
    <a href="/">    
        <div class="msg msg-gray">Sem resultados :(</div>
    </a>
@elseif(count($contacts) == 0)
    <a href="/events/new">
        <div class="msg msg-gray">Seus contatos aparecerão aqui</div>
    </a>
@endif


@endsection