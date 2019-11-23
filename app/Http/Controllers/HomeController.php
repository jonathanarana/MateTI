<?php

namespace App\Http\Controllers;
// Esta linea es para poder utilizar el modelo de los usuarios
use App\User;

use Illuminate\Http\Request;

class HomeController extends Controller{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(){
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $users=User::all(); //llenamos la coleccion de Usuarios
        $verificados=$users->filter(function ($user) {
          return $user->email_verified_at;
        });
        return view('home',compact('verificados')); //pasamos la coleccion a la vista
    }

    public function get_users(){
      return json_encode(User::all());
    }
}
