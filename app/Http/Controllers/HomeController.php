<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\Message;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('carte.accueil');
    }
    public function build()
    {
Mail::to('bedjick@gmail.com')->send(new Message());
        return $this->subject('Disponibilite de Carte Etudiant')
            ->view('mail.mail-sender');
    }
   

}