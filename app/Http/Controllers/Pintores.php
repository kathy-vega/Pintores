<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Pintores extends Controller
{
    public function vinci(){
      $title = 'Leonardo';
      return view('leoDa', ['title' => $title]);
    }

    public function raf(){
      $title = 'Rafael Sanzio';
      return view('rafasa', ['title' => $title]);
    }

    public function cara(){
      $title = 'Caravaggio';
      return view('cara', ['title' => $title]);
    }

    public function dona(){
      $title = 'Donatello';
      return view('dona', ['title' => $title]);
    }

    public function angel(){
      $title = 'Miguel Angelo';
      return view('migAng', ['title' => $title]);
    }

    public function princi(){
      $title = 'Hola';
      return view('principal', ['title' => $title]);
    }
}
