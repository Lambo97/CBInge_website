<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class FolkloreController extends Controller
{
    /**
     * Display the current chants.
     *
     * @return \Illuminate\Http\Response
     */
    public function chants()
    {

        return view('folklore.chants', compact('year', 'president', 'tresorier', 'secretaire', 'vp', 'presidente', 'mdc', 'da', 'sansFonctions', 'assistants'));
    }
}
