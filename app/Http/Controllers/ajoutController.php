<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Message;

class ajoutController extends Controller
{
    public function ajout()
    {
        return view('layouts.ajouter');
    }

    public function envoie()
    {   $destination = User::all();
        return view('layouts.envoyer',compact('destination'));
    }
    public function contacts()
    {   $contacts = User::all();
        return view('layouts.contacts',compact('contacts'));
    }
    public function store(Request $request)
        {
            $input = $request->all();
            Message::envoie($input);
            return redirect('layouts.envoyer')->with('flash_message', 'Courrier envoye!');  
        }
}
