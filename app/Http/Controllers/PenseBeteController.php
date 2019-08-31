<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PenseBete;


class PenseBeteController extends Controller
{
    /**
     * Display the current pense-bete.
     *
     * @return \Illuminate\Http\Response
     */
    public function pensebete()
    {
        $activites = PenseBete::where('type', 'Activités du comité')->orderBy('nom')->get();
        $listing = PenseBete::where('type', 'Listings')->orderBy('nom')->get();
        $vrac = PenseBete::where('type', 'En vrac')->orderBy('nom')->get();
        return view('pensebete.pensebete', compact('activites', 'listing', 'vrac'));
    }

    public function memo(PenseBete $memo)
    {
        return response()->json($memo);
    }

    public function admin()
    {
        return view('pensebete.adminPenseBete');
    }

    public function add(Request $request)
    {
        $this->validate($request, [
            'nom' => 'required',
            'type' => 'required',
            'message' => 'required'
        ]);

        // Create Album
        $memo = new PenseBete;
        $memo->nom = $request->input('nom');
        $memo->type = $request->input('type');
        $memo->message = $request->input('message');
        $memo->timestamps = false;
        $memo->save();

        return redirect('/pensebete')->with('success', 'Mémo ajouté');
    }

    public function edit()
    {
      $activites = PenseBete::where('type', 'Activités du comité')->orderBy('nom')->get();
      $listing = PenseBete::where('type', 'Listings')->orderBy('nom')->get();
      $vrac = PenseBete::where('type', 'En vrac')->orderBy('nom')->get();
      return view('pensebete.editPenseBete', compact('activites', 'listing', 'vrac'));
    }

    public function update(Request $request, PenseBete $memo)
    {
        $memo->type = $request->input('type');
        $memo->message = $request->input('message');
        $memo->timestamps = false;
        $memo->save();
        return redirect('/pensebete')->with('success', 'Mémo modifié');
    }

}
