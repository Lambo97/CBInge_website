<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Menu;
use App\SousMenu;
use App\BleusMenu;

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
}
