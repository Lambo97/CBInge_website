<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Photo;
use App\PhotoAlbum;

class PhotoController extends Controller
{
    public function index()
    {
        $annees = array();
        for($y = year(); $y >= 1999; $y--)
        {
            $annee = array();
            $annee['annee'] = $y;
            $annee['nb_album'] = PhotoAlbum::where('annee', $y)->count();
            $first_album = PhotoAlbum::where('annee', $y)->first();
            if($first_album)
            {
                $annee['cover_album'] = $first_album->id;
            }
            else
            {
                $annee['cover_album'] = null;
            }
            array_push($annees, $annee);
        }
        return view('photo.index', compact('annees'));
    }

    public function annee($annee)
    {
        $albums = PhotoAlbum::where('annee', $annee)->get();
        return view('photo.annee', compact('albums', 'annee'));
    }

    public function album($annee, PhotoAlbum $album)
    {
        $photos = $album->photos()->paginate(50);
        return view('photo.album', compact('photos', 'album'));
    }

    public function photo($annee, PhotoAlbum $album, Photo $photo)
    {
        $img = \Image::make(storage_path('app/public/photos/'. $photo->album->annee.'/'.$photo->album->nom.'/'.$photo->lien));//->fit(600, 600);
        return $img->response();
    }

    public function cover(PhotoAlbum $album)
    {
        return response()->file(storage_path('app/public/photos/cover/'.$album->cover));
    }

    public function admin()
    {
        $annees = array();
        for($y = year(); $y >= 1999; $y --)
        {
            array_push($annees, $y);
        }
        return view('photo.create_album', compact('annees'));
    }

    public function createAlbum(Request $request)
    {
        $this->validate($request, [
            'nom' => 'required', 
            'annee' => 'required',
            'cover' => ['image','nullable', 'max:1999', 'required']
        ]);
        
        // Handle File Upload
        if($request->hasFile('cover')){
            $extension = $request->file('cover')->getClientOriginalExtension();
            // Filename to store
            $filename= $request->input('annee').str_replace(" ", "", $request->input('nom')).'.png';
            // Resize the image
            $img = \Image::make($request->file('cover'))->fit(600);
            // Upload Image
            $img->save(storage_path('app/public/photos/cover/'.$filename));
        }else{
            $filename = null;
        }

        // Create Album
        $album = new PhotoAlbum;
        $album->nom = $request->input('nom');
        $album->annee = $request->input('annee');
        $album->cover = $filename;
        $album->timestamps = false;
        $album->save();

        $album = PhotoAlbum::where([['nom', $request->input('nom')], ['annee', $request->input('annee')]])->first();

        return redirect('/photos/add_photos/'.$album->id)->with('success', 'Album créé');
    }

    public function addPhotos($album)
    {
        $album = PhotoAlbum::find($album);
        $albums = PhotoAlbum::all();
        return view('photo.add_photos', compact('albums', 'album'));
    }

    public function storePhotos(Request $request)
    {
        $this->validate($request, [
            'album' => 'required',
            'photos' => 'required'
        ]);
        
        $album = PhotoAlbum::find($request->input('album'));

        // Create the directory if it does not exist
        $path = storage_path('app/public/photos/'.$album->annee);
        if(!file_exists($path))
        {
            mkdir($path);
        }
        $path = $path.'/'.$album->nom;
        if(!file_exists($path))
        {
            mkdir($path);
        }

        // Handle File Upload
        if($request->hasFile('photos')){
            $files = $request->file('photos');
            foreach($files as $file)
            {
                $filename = $file->getClientOriginalName();
                $extension = $file->getClientOriginalExtension();
                $filenameToStore = $filename.'_'.time().'.'.$extension;
                $img = \Image::make($file);//->fit(600);
                $img->save($path.'/'.$filenameToStore);
                $photo = new Photo;
                $photo->album_id = $request->input('album');
                $photo->lien = $filenameToStore;
                $photo->timestamps = false;
                $photo->save();
            }
                
        }
        return redirect('/photos/'.$album->annee.'/'.$album->id)->with('success', 'Photos ajoutée');
    }
}
