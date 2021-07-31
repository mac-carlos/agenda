@extends('layouts.main')

@section('title', 'Novo Contato')

@section('content')

<h1>Novo Contato</h1>

<form style="padding-top:1rem" action="/events" method="POST">
    @csrf
    <input type="text" id="nome" name="nome" placeholder="Nome completo"/>
    <input type="email" id="email" name="email" placeholder="Email"/>
    <input type="text" id="cpf" name="cpf" placeholder="Cpf"/>
    <input type="text" id="nascimento" name="nascimento" placeholder="Data de nascimento"/>
    <h2>Telefones:</h2>
    <div>
        <input type="text" id="celular" name="celular" placeholder="Celular"/>
        <input type="text" id="residencial" name="residencial" placeholder="Residencial"/>
        <input type="text" id="comercial" name="comercial" placeholder="Comercial"/>
    </div>
    <h2>Endereço:</h2>
    <div>
        <input type="text" id="rua" name="rua" placeholder="Rua"/>
        <input type="text" id="numero" name="numero" placeholder="Número"/>
        <input type="text" id="bairro" name="bairro" placeholder="Bairro"/>
        <input type="text" id="cep" name="cep" placeholder="CEP"/>
    </div>
    </div>
        <input type="text" id="cidade" name="cidade" placeholder="Cidade"/>
        <select name="estado" id="estado">
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