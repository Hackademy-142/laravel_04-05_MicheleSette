<?php

namespace App\Http\Controllers;

use App\Models\Contacts;
use App\Mail\Contactmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PublicController extends Controller
{
    public function homepage () {
        return view('welcome');
    }


    public function contattaci() 
    {
        return view('contattaci');
    }

    public function submit(Request $request) //!dependency injection
    {
        // dd($request->all()); 
        
        // recuperiamo i dati del form
        $username = $request->username;
        $email = $request->email;
        $message = $request->message;
        
        // creo nuovo oggeto per salvarlo nel database
        $user =  new Contacts();

        $user->username= $username;
        $user->email= $email;
        $user->message=$message;

        // dd($user);

        // !per salvarlo nel database utilizzo questo metodo
        $user->save();


        //* SPEDIRE EMAIL ALL'UTENTE
        Mail::to($email)->send(new Contactmail());
        // mail è la classse di partenza e to- destinatario

        // dd('controlla casella di posta');

        return redirect()->route('home')->with('status', 'Email inviata con successo');;
    }
}
