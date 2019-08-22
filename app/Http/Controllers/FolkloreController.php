<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Chant;


class FolkloreController extends Controller
{
    /**
     * Display the current chants.
     *
     * @return \Illuminate\Http\Response
     */
    public function chants()
    {
        $chants_facultaires = Chant::where('type', 'Chants facultaires')->orderBy('nom')->get();
        $chants_folkloriques = Chant::where('type', 'Chants folkloriques')->orderBy('nom')->get();
        $chants_indispensables = Chant::where('type', 'Chants indispensables')->orderBy('nom')->get();
        return view('folklore.chants', compact('chants_facultaires', 'chants_folkloriques', 'chants_indispensables'));
    }

    public function chant(Chant $chant)
    {
        return response()->json($chant);
    }

    public function oripeaux()
    {

        return view('folklore.oripeaux');
    }

    public function admin()
    {
        return view('folklore.adminChant');
    }

    public function add(Request $request)
    {
        $this->validate($request, [
            'nom' => 'required', 
            'type' => 'required',
            'paroles' => 'required'
        ]);
        
        // Create Album
        $chant = new Chant;
        $chant->nom = $request->input('nom');
        $chant->type = $request->input('type');
        $chant->paroles = $request->input('paroles');
        $chant->timestamps = false;
        $chant->save();

        return redirect('/folklore/chants')->with('success', 'Chant ajouté');
    }

    public function edit()
    {
        $chants_facultaires = Chant::where('type', 'Chants facultaires')->orderBy('nom')->get();
        $chants_folkloriques = Chant::where('type', 'Chants folkloriques')->orderBy('nom')->get();
        $chants_indispensables = Chant::where('type', 'Chants indispensables')->orderBy('nom')->get();
        return view('folklore.editChant', compact('chants_facultaires', 'chants_folkloriques', 'chants_indispensables'));
    }

    public function update(Request $request, Chant $chant)
    {
        $chant->type = $request->input('type');
        $chant->paroles = $request->input('paroles');
        $chant->timestamps = false;
        $chant->save();
        return redirect('/folklore/chants')->with('success', 'Chant modifié');
    }

}
