@extends('layouts.main')

@section('title', 'Editar Contato')

@section('content')

<h1>Editar Contato</h1>

<form style="padding-top:1rem" action="/events/update/{{ $contact->id }}" method="POST">
    @csrf
    @method('PUT')
    <input type="text" id="nome" name="nome" placeholder="Nome completo" value="{{ $contact->nome }}"/>
    <input type="email" id="email" name="email" placeholder="Email" value="{{ $contact->email }}"/>
    <input type="text" id="cpf" name="cpf" placeholder="Cpf" value="{{ $contact->cpf }}"/>
    <input type="date" id="nascimento" name="nascimento"/> {{-- value="{{ $contact->nascimento->format('Y-m-d') }}" --}}
    <p>por algum motivo a formatação value="{.{$contact->nascimento->format('Y-m-d')}.}" não funciona </p>
    <h2>Telefones:</h2>
    <div>
        <input type="text" id="celular" name="celular" placeholder="Celular" value="{{ $contact->celular }}"/>
        <input type="text" id="residencial" name="residencial" placeholder="Residencial" value="{{ $contact->residencial }}"/>
        <input type="text" id="comercial" name="comercial" placeholder="Comercial" value="{{ $contact->comercial }}"/>
    </div>
    <h2>Endereço:</h2>
    <div>
        <input type="text" id="rua" name="rua" placeholder="Rua" value="{{ $contact->rua }}"/>
        <input type="text" id="numero" name="numero" placeholder="Número" value="{{ $contact->numero }}"/>
        <input type="text" id="bairro" name="bairro" placeholder="Bairro" value="{{ $contact->bairro }}"/>
        <input type="text" id="cep" name="cep" placeholder="CEP" value="{{ $contact->cep }}"/>
    </div>
    </div>
        <input type="text" id="cidade" name="cidade" placeholder="Cidade" value="{{ $contact->cidade }}"/>
        <select name="estado" id="estado" value="{{ $contact->estado }}">
            <option value="AC">Acre</option>
            <option value="AL">Alagoas</option>
            <option value="AP">Amapá</option>
            <option value="AM">Amazonas</option>
            <option value="BA">Bahia</option>
            <option value="CE">Ceará</option>
            <option value="DF">Distrito Federal</option>
            <option value="ES">Espírito Santo</option>
            <option value="GO">Goiás</option>
            <option value="MA">Maranhão</option>
            <option value="MT">Mato Grosso</option>
            <option value="MS">Mato Grosso do Sul</option>
            <option value="MG">Minas Gerais</option>
            <option value="PA">Pará</option>
            <option value="PB">Paraíba</option>
            <option value="PR">Paraná</option>
            <option value="PE">Pernambuco</option>
            <option value="PI">Piauí</option>
            <option value="RJ">Rio de Janeiro</option>
            <option value="RN">Rio Grande do Norte</option>
            <option value="RS">Rio Grande do Sul</option>
            <option value="RO">Rondônia</option>
            <option value="RR">Roraima</option>
            <option value="SC">Santa Catarina</option>
            <option value="SP">São Paulo</option>
            <option value="SE">Sergipe</option>
            <option value="TO">Tocantins</option>
        </select>
    </div>
    <div class="flex">
        <div></div>
        <input type="submit" class="blue" value="salvar"/>
    </div>
</form>
@endsection