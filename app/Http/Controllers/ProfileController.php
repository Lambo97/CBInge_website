<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Intervention\Image\Facades\Image;
use App\Notifications\UserApproved;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{

    /**
     * Display the specified user.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return view('profile.show', compact('user'));
    }

    /**
     * Show the form for editing the specified user.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {        
        //Check if user exists before editing
        if (!isset($user)){
            return redirect('/')->with('error', 'No Profile Found');
        }
        // Check for correct user
        if(auth()->user()->id !== $user->id and auth()->user()->droit > 1){
            return redirect('/')->with('error', 'Unauthorized Page');
        }

        $options = ['Ingénieur civil des constructions', 'Ingénieur civil des mines et géologue', 'Ingénieur civil en chimie et sciences des matériaux', 'Ingénieur civil électromécanicien', 'Ingénieur civil en aérospatiale', 'Ingénieur civil électricien', 'Ingénieur civil en informatique', 'Ingénieur civil en sciences des données', 'Ingénieur civil physicien', 'Ingénieur civil mécanicien', 'Ingénieur civil biomédical'];
        return view('profile.edit', compact('user', 'options'));
    }

    /**
     * Update the specified user in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $this->validate($request, [
            
            'name' => ['required', 'string', 'max:255'],
            'prenom' => ['required', 'string', 'max:255'],
            'surnom' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'date_de_naissance' => ['required', 'date'],
            'adresse' => ['required', 'string', 'max:255'],
            'ville' => ['required', 'string', 'max:255'],
            'code_postal' => ['required', 'integer'],
            'gsm' => ['required', 'string', 'max:12', 'min:10'],
            'entree_inge' => ['required', 'integer', 'min:2000', 'max:'.date('Y')],
            'annee_bapteme' => ['required', 'integer', 'min:'.$user->entree_inge, 'max:'.date('Y')],
            'description' => ['string', 'max:4000', 'nullable'],
            'photo' => ['image','nullable', 'max:1999']
        ]);

        // Handle File Upload
        if($request->hasFile('photo')){
            $extension = $request->file('photo')->getClientOriginalExtension();
            // Filename to store
            $filename= $user->login.'.'.$extension;
            // Upload Image
            $path = $request->file('photo')->storeAs('public/profile/'.$user->annee_bapteme.'/', $filename);
        }else{
            $filename = $user->photo;
        }



        // Update information
        $user->name = $request->input('name');
        $user->prenom = $request->input('prenom');
        $user->surnom = $request->input('surnom');
        $user->email = $request->input('email');
        $user->date_de_naissance = date("Y-m-d", strtotime($request->input('date_de_naissance')));
        $user->adresse = $request->input('adresse');
        $user->code_postal = $request->input('code_postal');
        $user->ville = $request->input('ville');
        $user->gsm = $request->input('gsm');
        $user->entree_inge = $request->input('entree_inge');
        $user->annee_bapteme = $request->input('annee_bapteme');
        $user->autre_etudes = $request->input('autre_etudes');
        $user->section = $request->input('section');
        $user->photo = $filename;
        $user->probleme_sante = $request->input('probleme_sante');
        $user->boisson = $request->input('boisson');
        $user->guindaille = $request->input('guindaille');
        $user->titre_guindaille = $request->input('titre_guindaille');
        $user->description = $request->input('description');
        $user->save();
        return redirect('/profile/show/'.$user->id)->with('success', 'Page mise à jour');
    }

    /**
     * Remove the specified user from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //Check if user exists before deleting
        if (!isset($user))
        {
            return redirect('/profile/newusers')->with('error', "Pas d'utilisateur trouvé");
        }

        if($user->photo != 'noimage.jpg'){
            // Delete Image
            Storage::delete('public/profile/'.$user->annee_bapteme.'/'.$user->photo);
        }

        $user->delete();
        return redirect('/profile/newusers')->with('success', 'Utilisateur supprimé');
    }


    /**
     * Approve the user (by an admin)
     *
     * @param  User  $user
     * @return \Illuminate\Http\Response
     */
    public function approve(User $user)
    {
        $user->update(['droit' => 7]);
        $user->notify(new UserApproved($user));

        return redirect('/profile/newusers')->with('success', 'Utilisateur supprimé');

    }

    /**
     * List the user to be approved
     *
     * @param  User  $user
     * @return \Illuminate\Http\Response
     */
    public function newusers()
    {
        $users = User::where('droit', 8)->get();

        return view('profile.newusers', compact('users'));
    }
}
