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

    const limparFormulario = (endereco) =>{
        document.getElementById('rua').value = '';
        document.getElementById('bairro').value = '';
        document.getElementById('cidade').value = '';
        document.getElementById('estado').value = '';
    }

    const preencherFormulario = (endereco) =>{
        document.getElementById('rua').value = endereco.logradouro;
        document.getElementById('bairro').value = endereco.bairro;
        document.getElementById('cidade').value = endereco.localidade;
        document.getElementById('estado').value = endereco.uf;
    }

    const eNumero = (numero) => /^[0-9]+$/.test(numero);

    const cepValido = (cep) => cep.length == 8 && eNumero(cep); 

    const pesquisarCep = async() => {
        limparFormulario();
        
        const cep = document.getElementById('cep').value;
        const url = `https://viacep.com.br/ws/${cep}/json/`;
        if (cepValido(cep)){
            const dados = await fetch(url);
            const endereco = await dados.json();
            if (endereco.hasOwnProperty('erro')){
                document.getElementById('endereco').value = 'CEP não encontrado!';
            }else {
                preencherFormulario(endereco);
            }
        }else{
            document.getElementById('endereco').value = 'CEP incorreto!';
        }
    }
</script>