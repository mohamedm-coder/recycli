<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller
{
  public function index(){
    return view('client');
  }
  public function wel(){
    return view('welcome');
  }
  public function google(){
    return view('googleAutocomplete');
  }
}

