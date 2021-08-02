<!DOCTYPE html>

<html lang="pt">
    <head>
        <title>Agenda | @yield('title')</title>

        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <meta name="description" content="Agenda utilizando Lararvel."/>
        <meta charset="utf-8"/>

        <link rel="stylesheet" href="/css/styles.css"/>
    </head>

    <main>
        @if(session('msg'))
            <div class="msg msg-green">{{ session('msg') }}</div>
        @endif
        @yield('content')
    </main>
</html>

<script>
    'use strict';

    const pesquisarCep = async() => {       
        const cep = document.getElementById('cep').value;
        const url = `https://viacep.com.br/ws/${cep}/json/`;
        const dados = await fetch(url);
        const endereco = await dados.json();
        preencherFormulario(endereco)
    }

    const preencherFormulario = (endereco) =>{
        document.getElementById('rua').value = endereco.logradouro;
        document.getElementById('bairro').value = endereco.bairro;
        document.getElementById('cidade').value = endereco.localidade;
        document.getElementById('estado').value = endereco.uf;
    }

    document.getElementById('cep')
        .addEventListener('focusout',pesquisarCep);
</script>