<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\RepetChantsPv;

class PvRepetChantsController extends Controller
{
    /**
     * Display the comite's pv.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        \Auth::user()->pv_repet_chant_check = RepetChantsPv::orderBy('created_at', 'desc')->first()->id;
        $pvs = RepetChantsPv::whereYear('created_at', year())->orderBy('created_at', 'desc')->paginate(10);
        return view('bleus.pvrepetchant.index', compact('pvs'));
    }

    public function show(RepetChantsPv $pv)
    {
        return view('bleus.pvrepetchant.show', compact('pv'));
    }

    public function add()
    {
        return view('bleus.pvrepetchant.add');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'titre' => 'required',
            'message' => 'required',
        ]);
        
        // Create Pv
        $pv = new RepetChantsPv;
        $pv->titre = $request->input('titre');
        $pv->message = $request->input('message');
        $pv->user_id = auth()->user()->id;
        $pv->save();

        // Send notification
        \OneSignal::sendNotificationToSegment(
            auth()->user()->surnom_forum." a publié un PV d'une repet chants !",
            $segment = "Comite",
            $url = "/forum"
        );

        return redirect('/bleus/pvrepetchant')->with('success', 'PV publié');
    }

    public function edit(RepetChantsPv $pv)
    {
        //Check if pv exists before editing
        if (!isset($pv)){
            return redirect('/bleus/pvrepetchant')->with('error', 'Pas de pv à éditer');
        }
        // Check for correct user
        if(auth()->user()->id !== $pv->user_id and auth()->user()->droit > 2)
        {
            return redirect('/bleus/pvrepetchant')->with('error', "Vous n'avez pas l'autorisation de modifier ce pv");
        }
        return view('bleus.pvrepetchant.edit', compact('pv'));
    }

    public function update(Request $request, RepetChantsPv $pv)
    {
        $this->validate($request, [
            'titre' => 'required',
            'message' => 'required',
        ]);

        if(auth()->user()->id !== $pv->user_id and auth()->user()->droit > 2)
        {
            return redirect('/bleus/pvrepetchant')->with('error', "Vous n'avez pas l'autorisation de modifier ce Pv");
        }

        $pv->titre = $request->input('titre');
        $pv->message = $request->input('message');
        $pv->save();
        return redirect('/bleus/pvrepetchant')->with('success', 'Pv updaté');

    }

    public function destroy(RepetChantsPv $pv)
    {
        //Check if user exists before deleting
        if (!isset($pv))
        {
            return redirect('/bleus/pvrepetchant')->with('error', "Pas de pv trouvé");
        }

        if(auth()->user()->id !== $pv->user_id and auth()->user()->droit > 2)
        {
            return redirect('/bleus/pvrepetchant')->with('error', "Vous n'avez pas l'autorisation de supprimer ce Pv");
        }

        $pv->delete();
        return redirect('/bleus/pvrepetchant')->with('success', 'Pv supprimé');
    }

    public function old()
    {
        $pvs = RepetChantsPv::whereYear('created_at','<', year())->orderBy('created_at', 'desc')->paginate(10);
        return view('bleus.pvrepetchant.old', compact('pvs'));
    }
}
