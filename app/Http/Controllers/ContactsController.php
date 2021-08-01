<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Contacts;

class ContactsController extends Controller
{
    public function index()
    {
        $search = request('search');

        if($search) {
            $contacts = Contacts::where([
                ['nome', 'like', '%'.$search.'%']
            ])->get();
        } else { 
            $contacts = Contacts::all(); 
        }

        return view('contacts', ['contacts' => $contacts, 'search' => $search]);
    }

    public function show($id) 
    {
        $contact = Contacts::findOrFail($id);

        return view('events.show', ['contact' => $contact]);
    }

    public function destroy($id)
    {
        Contacts::findOrFail($id)->delete();

        return redirect('/')->with('msg', 'Contato deletado!');
    }
/*
    public function store(Request $request)
    {
        $contact = new Contacts;

        $contact->nome = $request->nome;
        $contact->email = $request->email;
        $contact->nascimento = $request->nascimento;
        $contact->celular = $request->celular;
        $contact->residencial = $request->residencial;
        $contact->comercial = $request->comercial;
        $contact->cpf = $request->cpf;
        $contact->rua = $request->rua;
        $contact->numero = $request->numero;
        $contact->bairro = $request->bairro;
        $contact->cidade = $request->cidade;
        $contact->estado = $request->estado;

        $contact->save();

        return redirect('/')->with('msg', 'Contato salvo!');
    }*/
}
