@extends('layouts.main')

@section('title', 'Contatos')

@section('content')

<h1>Contatos</h1>

<div class="flex search">
    <form action="" >
        <input type="text" id="search" name="search" placeholder="Pesquisar"/>
    </form>
    <a href="/events/new"><button class="blue">Novo contato</button></a>
</div>

@foreach($contacts as $contact)
    <a href="/events/{{ $contact->id }}">
        <div class="flex item">
            <p>{{ $contact->nome }} </p> 
            <p>{{ $contact->email }}</p>
        </div>
    </a>
@endforeach

@endsection