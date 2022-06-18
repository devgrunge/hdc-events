<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
   public function index(){
    $nome = 'Alex';
  $idade = 23;
  $arr = [1,2,3,4,5];
  $nomes = ['matheus', 'samira', 'joão', 'ruben'];

    return view('welcome', ['nome' => $nome,
                                           'idade' => $idade,
                                              'arr' => $arr,
                                              'nomes' => $nomes
                                        ]);
   }

   public function create() {
    return view('events.create');
   }

   public function signin() {
    return view('signin.enter');
   }

   public function signup() {
    return view('signup.form');
   }
}
