<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EventController extends Controller
{   public function index() {
    return view('agenda');
}
    
}   

   