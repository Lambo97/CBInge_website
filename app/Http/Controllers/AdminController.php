<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Menu;
use App\SousMenu;
use App\BleusMenu;
use App\User;
use App\Fonction;

class AdminController extends Controller
{
    public function menus()
    {
        $menus = Menu::all();
        $menus_bleus = BleusMenu::all();

        $droits = array("0" => "Tout le monde", "1" => "Admin", "2" => "Bureau", "3" => "Togés", "4" => "Assistants", "5" => "Vieux", "6" => "Baptisés", "7" => "Bleus");
        return view('admin.menus', compact('menus', 'droits', 'menus_bleus'));
    }

    public function droitMenu(Menu $menu, $droit)
    {
        $menu->droit = $droit;
        $menu->timestamps = false;
        $menu->save();
        return response()->json("Ok");
    }

    public function droitMenuBleus(BleusMenu $menu, $droit)
    {
        $menu->droit = $droit;
        $menu->timestamps = false;
        $menu->save();
        return response()->json("Ok");
    }

    public function droitSousMenu(SousMenu $sous_menu, $droit)
    {
        $sous_menu->droit = $droit;
        $sous_menu->timestamps = false;
        $sous_menu->save();
        return response()->json("Ok");
    }

    public function afficheMenu(Menu $menu, $affiche)
    {
        $menu->afficher = $affiche;
        $menu->timestamps = false;
        $menu->save();
        if($affiche == 0)
            return response()->json("Lien désactivé");
        else
            return response()->json("Lien activé");
    }

    public function afficheMenuBleus(BleusMenu $menu, $affiche)
    {
        $menu->afficher = $affiche;
        $menu->timestamps = false;
        $menu->save();
        if($affiche == 0)
            return response()->json("Lien désactivé");
        else
            return response()->json("Lien activé");
    }

    public function afficheSousMenu(SousMenu $sous_menu, $affiche)
    {
        $sous_menu->afficher = $affiche;
        $sous_menu->timestamps = false;
        $sous_menu->save();
        if($affiche == 0)
            return response()->json("Lien désactivé");
        else
            return response()->json("Lien activé");
    }

    public function addMenu()
    {
        $menus = Menu::all();
        $droits = array("0" => "Tout le monde", "1" => "Admin", "2" => "Bureau", "3" => "Togés", "4" => "Assistants", "5" => "Vieux", "6" => "Baptisés", "7" => "Bleus");
        return view('admin.addMenu', compact('menus', 'droits'));
    }

    public function storeMenu(Request $request)
    {
        $this->validate($request, [
            'nom' => 'required',
            'droit' => 'integer|max:8',
            'afficher' => 'between:0,1',
            'lien' => 'required_if:type,sousMenu'
        ]);

        if($request->input('type') == "menu")
        {
            $menu = new Menu;
            $menu->nom = $request->input('nom');
            $menu->lien = $request->input('lien');
            $menu->droit = $request->input('droit');
            $menu->afficher = $request->input('afficher');
            $menu->timestamps = false;
            $menu->save();
            return redirect('/admin/menus')->with('success', 'Menu enregistré');
        }
        else
        {
            $this->validate($request, [
                'menu' => 'exists:menus,id',
            ]);
            $sous_menu = new SousMenu;
            $sous_menu->nom = $request->input('nom');
            $sous_menu->id_menu = $request->input('menu');
            $sous_menu->lien = $request->input('lien');
            $sous_menu->droit = $request->input('droit');
            $sous_menu->afficher = $request->input('afficher');
            $sous_menu->timestamps = false;
            $sous_menu->save();
            return redirect('/admin/menus')->with('success', 'Sous menu enregistré');
        }
    }

    public function destroyMenu(Menu $menu)
    {
        $menu->delete();
        foreach($menu->sousMenus as $sous_menu)
        {
            $sous_menu->delete();
        }
        return redirect('/admin/menus')->with('success', 'Menu supprimé');
    }

    public function destroySousMenu(SousMenu $sousMenu)
    {
        $sousMenu->delete();
        return redirect('/admin/menus')->with('success', 'Menu supprimé');
    }

    public function destroyMenuBleus(BleusMenu $menu)
    {
        $menu->delete();
        return redirect('/admin/menus')->with('success', 'Menu supprimé');
    }

    public function acces()
    {
        return view('admin.acces');
    }

    public function changeDroit(Request $request)
    {
        $user = User::find($request->user_id);
        $user->droit = $request->droit;
        $user->save();
        return response()->json("Droit de ".$user->prenom." ".$user->name." changé en ".$user->droit);
    }

    public function changeBleus()
    {
        $users = User::where('droit', 7)->get();
        foreach($users as $user)
        {
            $user->droit = 6;
            $user->save();
        }
        return redirect('admin/acces')->with('success', 'Droits des bleus changés');
    }

    public function repertoire()
    {
        return view('admin.repertoire');
    }

    public function nouveauComite()
    {
        $users = User::orderBy('name')->get();
        return view('admin.newComite', compact('users'));
    }

    public function addNouveauComite(Request $request)
    {
        $this->validate($request, [
            'president' => 'required',
            'tresorier' => 'required',
            'secretaire' => 'required',
            'toge' => 'required',
            'assistants' => 'required',
        ]);
        
        $already = User::whereHas('fonctions', function($query){
            $query->where('annee', year())->where('nom', 'Président');
        })->count();

        if($already > 0)
        {
            return redirect('admin/repertoire/nouveauComite')->with('error', 'Un comité existe déjà pour cette année');
        }

        $president = User::find($request->input('president'));
        $president->fonctions()->attach(Fonction::where('nom', 'Président')->first()->id, array("annee" => year()));

        if($request->input('vp'))
        {
            $vp = User::find($request->input('vp'));
            $vp->fonctions()->attach(Fonction::where('nom', 'Vice-Président')->first()->id, array("annee" => year()));
        }

        if($request->input('presidente'))
        {
            $presidente = User::find($request->input('presidente'));
            $presidente->fonctions()->attach(Fonction::where('nom', 'Présidente')->first()->id, array("annee" => year()));
        }

        $tresorier = User::find($request->input('tresorier'));
        $tresorier->fonctions()->attach(Fonction::where('nom', 'Trésorier')->first()->id, array("annee" => year()));

        $secretaire = User::find($request->input('secretaire'));
        $secretaire->fonctions()->attach(Fonction::where('nom', 'Secrétaire')->first()->id, array("annee" => year()));

        foreach($request->input('toge') as $user_id)
        {
            $user = User::find($user_id);
            $user->fonctions()->attach(Fonction::where('nom', 'Togé sans fonction')->first()->id, array("annee" => year()));
        }

        foreach($request->input('assistants') as $user_id)
        {
            $user = User::find($user_id);
            $user->fonctions()->attach(Fonction::where('nom', 'Assistant')->first()->id, array("annee" => year()));
        }

        if($request->input('webmaster'))
        {
            $webmaster = User::find($request->input('webmaster'));
            $webmaster->fonctions()->attach(Fonction::where('nom', 'Webmaster')->first()->id, array("annee" => year()));
        }

        return redirect('admin/repertoire')->with('success', 'Comité ajouté');
        
    }

    public function nouvelleFonction()
    {
        $fonctions = Fonction::all();
        $users = User::orderBy('name')->get();
        return view('admin.newFonction', compact('users', 'fonctions'));
    }

    public function addNouvelleFonction(Request $request)
    {
        $this->validate($request, [
            'user' => 'required',
            'fonction' => 'required',
            'annee' => 'required',
        ]);

        $already = User::whereHas('fonctions', function($query) use($request){
            $query->where('annee', $request->input('annee'))->where('fonctions.id', $request->input('fonction'));
        })->count();

        if($already > 0)
        {
            return redirect('admin/repertoire/nouvelleFonction')->with('error', 'Cette fonction existe déjà');
        }

        $user = User::find($request->input('user'));
        $user->fonctions()->attach($request->input('fonction'), array("annee" => $request->input('annee')));

        return redirect('admin/repertoire')->with('success', 'Fonction ajoutée');
    }

    public function searchFonction(Request $request)
    {
        if($request->keywords == "")
        {
            return response()->json(array());
        }
            
        $token = explode(' ', $request->keywords);
        $results = DB::table('users')->join('fonction_user', 'users.id', '=', 'fonction_user.user_id')->join('fonctions', 'fonction_user.fonction_id', '=', 'fonctions.id');
        $results->where('name', 'like', '%'.$request->keywords.'%')->orWhere('prenom', 'like', '%'.$request->keywords.'%')->orWhere('annee',$request->keywords)->orWhere('nom', $request->keywords);
        $results->when($token, function($q, $token) {
            if(count($token) > 1)
                return $q->orWhere([['prenom', 'like', '%'.$token[0].'%'],['name', 'like', '%'.$token[1].'%']])->orWhere([['name', 'like', '%'.$token[0].'%'],['prenom', 'like', '%'.$token[1].'%']]);
            else
                return $q;
        });
        return response()->json($results->orderBy('annee','desc')->orderBy('name')->select('name', 'prenom', 'surnom', 'user_id', 'nom', 'fonction_id', 'annee')->get());
    }

    public function deleteFonction(User $user, $fonction_id, $annee)
    {
        $user->fonctions()->newPivotStatement()->where('fonction_id',$fonction_id)->where('annee', $annee)->delete();
        return redirect('admin/repertoire')->with('success', 'Fonction supprimée');
    }

}

