<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Archive;

class ArchiveController extends Controller
{
    public function index()
    {
        $nanesseStNic = Archive::where('type', 'Nanesse St Nicolas')->get();
        $nanesseStTore = Archive::where('type', 'Nanesse St Toré')->get();
        $missel = Archive::where('type', 'Missel')->get();
        return view('archive.index', compact('nanesseStNic', 'nanesseStTore', 'missel'));
    }

    public function add()
    {
        $year = date('Y');
        if(date('m')<9)
        {
            $year = $year-1;
        }
        $annees = array();
        for($y = $year; $y >= 2000; $y --)
        {
            array_push($annees, $y);
        }
        $categories = ['Nanesse St Nicolas', 'Nanesse St Toré', 'Missel'];
        return view('archive.add', compact('annees', 'categories'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'categorie' => 'required',
            'annee' => 'required',
            'file' => "required|mimes:pdf|max:10000"
        ]);

        // Handle File Upload
        if($request->hasFile('file')){
            $extension = $request->file('file')->getClientOriginalExtension();
            // Filename to store
            $filename= str_replace(" ", "", $request->input('categorie')).$request->input('annee').'.'.$extension;
            // Upload File
            $path = $request->file('file')->storeAs('public/archives', $filename);
        }

        $archive = new Archive;
        $archive->type = $request->input('categorie');
        $archive->annee = $request->input('annee');
        $archive->commentaire = $request->input('commentaire');
        $archive->save();
        return redirect('/archives')->with('success', 'Archive enregistré');
    }

    public function file($url)
    {
        return response()->file(storage_path('app/public/archives/'.$url.'.pdf'));
    }
}
