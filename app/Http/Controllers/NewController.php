<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Contacts;

class NewController extends Controller
{
    public function index()
    {
        return view('events/new');
    }

    public function create()
    {
        return view('events.new');
    }

    public function store(Request $request)
    {
        $contact = new Contacts;

        $contact->nome = $request->nome;
        $contact->email = $request->email;
        $contact->nascimento = $request->nascimento;
        $contact->celular = $request->celular;
        $contact->residencial = $request->residencial;
        $contact->comercial = $request->comercial;
        $contact->cep = $request->cep;
        $contact->cpf = $request->cpf;
        $contact->rua = $request->rua;
        $contact->numero = $request->numero;
        $contact->bairro = $request->bairro;
        $contact->cidade = $request->cidade;
        $contact->estado = $request->estado;

        $contact->save();

        return redirect('/')->with('msg', 'Contato salvo!');
    }
}
