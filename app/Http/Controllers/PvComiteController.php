<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ComitePv;

class PvComiteController extends Controller
{
    /**
     * Display the comite's pv.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pvs = ComitePv::orderBy('created_at', 'desc')->paginate(10);
        return view('pvcomite.index', compact('pvs'));
    }

    public function show(ComitePv $pv)
    {
        return view('pvcomite.show', compact('pv'));
    }

    public function add()
    {
        return view('pvcomite.add');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'titre' => 'required',
            'message' => 'required',
        ]);
        
        // Create Pv
        $pv = new ComitePv;
        $pv->titre = $request->input('titre');
        $pv->message = $request->input('message');
        $pv->user_id = auth()->user()->id;
        $pv->save();

        // Send notification
        \OneSignal::sendNotificationToSegment(
            auth()->user()->surnom_forum." a publié un PV !",
            $segment = "Comite",
            $url = "/forum"
        );

        return redirect('/pvcomite')->with('success', 'PV publié');
    }

    public function edit(ComitePv $pv)
    {
        //Check if pv exists before editing
        if (!isset($pv)){
            return redirect('/pvcomite')->with('error', 'Pas de pv à éditer');
        }
        // Check for correct user
        if(auth()->user()->id !== $pv->user_id and auth()->user()->droit > 2)
        {
            return redirect('/pvcomite')->with('error', "Vous n'avez pas l'autorisation de modifier ce pv");
        }
        return view('pvcomite.edit', compact('pv'));
    }

    public function update(Request $request, ComitePv $pv)
    {
        $this->validate($request, [
            'titre' => 'required',
            'message' => 'required',
        ]);

        if(auth()->user()->id !== $pv->user_id and auth()->user()->droit > 2)
        {
            return redirect('/pvcomite')->with('error', "Vous n'avez pas l'autorisation de modifier ce Pv");
        }

        $pv->titre = $request->input('titre');
        $pv->message = $request->input('message');
        $pv->save();
        return redirect('/pvcomite')->with('success', 'Pv updaté');

    }

    public function destroy(ComitePv $pv)
    {
        //Check if user exists before deleting
        if (!isset($pv))
        {
            return redirect('/pvcomite')->with('error', "Pas de pv trouvé");
        }

        if(auth()->user()->id !== $pv->user_id and auth()->user()->droit > 2)
        {
            return redirect('/forum')->with('error', "Vous n'avez pas l'autorisation de supprimer ce Pv");
        }

        $pv->delete();
        return redirect('/pvcomite')->with('success', 'Pv supprimé');
    }
}
