<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Intervention\Image\Facades\Image;
use App\Notifications\UserApproved;
use Illuminate\Support\Facades\Storage;
use App\ExterieurUser;

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
        $fonctionCourante = $user->fonctions()->where('nom' ,'!=', 'Webmaster')->wherePivot('annee', year())->first();
        $fonctionsPrecedantes = $user->fonctions()->wherePivot('annee', '<', year())->orderBy('pivot_annee')->get();

        return view('profile.show', compact('user', 'fonctionCourante', 'fonctionsPrecedantes'));
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
            return redirect('/')->with('error', 'Page non autorisée');
        }

        // Check which surname is used for the forum
        if($user->surnom_forum == $user->name)
        {
            $surnom_forum = 2;
        }elseif($user->surnom_forum == $user->prenom)
        {
            $surnom_forum = 2;
        }elseif($user->surnom_forum == $user->surnom)
        {
            $surnom_forum = 4;
        }elseif($user->surnom_forum == $user->prenom.' '.$user->name)
        {
            $surnom_forum = 1;
        }else
        {
            $surnom_forum = 0;
        }

        $options = ['------', 'Ingénieur civil des constructions', 'Ingénieur civil des mines et géologue', 'Ingénieur civil en chimie et sciences des matériaux', 'Ingénieur civil électromécanicien', 'Ingénieur civil en aérospatiale', 'Ingénieur civil électricien', 'Ingénieur civil en informatique', 'Ingénieur civil en sciences des données', 'Ingénieur civil physicien', 'Ingénieur civil mécanicien', 'Ingénieur civil biomédical'];
        return view('profile.edit', compact('user', 'options', 'surnom_forum'));
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


        // Check which surname is used for the forum

        if($request->input('surnom_forum') == "2")
        {
            $surnom_forum = $request->input('name');
        }elseif($request->input('surnom_forum') == "3")
        {
            $surnom_forum = $request->input('prenom');
        }elseif($request->input('surnom_forum') == "4")
        {
            if(!$request->input('surnom'))
                $surnom_forum = $request->input('prenom').' '.$request->input('name');
            else
                $surnom_forum = $request->input('surnom');
        }else
        {
            $surnom_forum = $request->input('prenom').' '.$request->input('name');
        }

        if($request->input('newsletter'))
        {
            $newsletter = 1;
        }
        else
        {
            $newsletter = 0;
        }

        if(!$request->input('surnom'))
            $surnom = "";
        else
            $surnom = $request->input('surnom');


        // Update information
        $user->name = $request->input('name');
        $user->prenom = $request->input('prenom');
        $user->surnom = $surnom;
        $user->email = $request->input('email');
        $user->date_de_naissance = date("Y-m-d", strtotime($request->input('date_de_naissance')));
        $user->adresse = $request->input('adresse');
        $user->code_postal = $request->input('code_postal');
        $user->ville = $request->input('ville');
        $user->gsm = $request->input('gsm');
        $user->entree_inge = $request->input('entree_inge');
        $user->annee_bapteme = $request->input('annee_bapteme');
        $user->autre_etudes = $request->input('autre_etudes');
        $user->newsletter = $newsletter;
        if($request->input('section') == '------')
        {
            $user->section = null;
        }
        else
        {
            $user->section = $request->input('section');
        }
        $user->photo = $filename;
        $user->probleme_sante = $request->input('probleme_sante');
        $user->citation=$request->input('citation');
        $user->boisson = $request->input('boisson');
        $user->guindaille = $request->input('guindaille');
        $user->titre_guindaille = $request->input('titre_guindaille');
        $user->description = $request->input('description');
        $user->surnom_forum = $surnom_forum;
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
        // Send email
        $subject = "Ton inscription a été validée";
        $message = "Ton inscription a bien été enregistrée, voici les informations nécessaire pour te connecter \n";
        $message = $message . "Login : '".$user->login."'\n";
        $message = $message . "Utilise le mot de passe que tu as enrgesitré lors de ton inscription \n";
        $message = $message . "Connecte toi maintenant sur www.cbinge.com/login \n";
        $message = $message . "Si tu as des question n'hésite pas à envoer un mail à comite@cbinge.com";
        $from = "comite@cbinge.com";
        $headers = "From:" . $from;

        
        mail($user->email, $subject, $message);
        return redirect('/profile/newusers')->with('success', 'Utilisateur apprové');

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

    /**
     * List the parrains of the user
     *
     * @return \Illuminate\Http\Response
     */
    public function editParrain()
    {
        $parrains = auth()->user()->parrains()->get();

        return view('profile.editParrain', compact('parrains'));
    }

    /**
     * Add the parrain to the user
     *
     * @param  User  $parrain
     * @return \Illuminate\Http\Response
     */
    public function addParrain(User $parrain)
    {
        auth()->user()->parrains()->syncWithoutDetaching([$parrain->id]);
        $parrains = auth()->user()->parrains()->get();

        return view('profile.editParrain', compact('parrains'))->with('success', 'Parrain ajouté');
    }

    /**
     * Remove the parrain from the user
     *
     * @param  User  $parrain
     * @return \Illuminate\Http\Response
     */
    public function removeParrain(User $parrain)
    {
        auth()->user()->parrains()->detach([$parrain->id]);
        $parrains = auth()->user()->parrains()->get();

        return view('profile.editParrain', compact('parrains'))->with('success', 'Parrain retiré');
    }

    /** ----------------------------------------------------------------------------
     * List the bleus of the user
     *
     * @return \Illuminate\Http\Response
     */
    public function editBleu()
    {
        $bleus = auth()->user()->bleus()->get();

        return view('profile.editBleu', compact('bleus'));
    }

    /**
     * Add the bleu to the user
     *
     * @param  User  $bleu
     * @return \Illuminate\Http\Response
     */
    public function addBleu(User $bleu)
    {
        auth()->user()->bleus()->syncWithoutDetaching ([$bleu->id]);
        $bleus = auth()->user()->bleus()->get();

        return view('profile.editBleu', compact('bleus'))->with('success', 'Bleu ajouté');
    }

    /** 
     * Remove the bleu from the user
     *
     * @param  User  $bleu
     * @return \Illuminate\Http\Response
     */
    public function removeBleu(User $bleu)
    {
        auth()->user()->bleus()->detach([$bleu->id]);
        $bleus = auth()->user()->bleus()->get();

        return view('profile.editBleu', compact('bleus'))->with('success', 'Bleu retiré');
    }

    /** ----------------------------------------------------------------------------
     *  ----------------------------------------------------------------------------
     * List the parrains exterieurs of the user
     *
     * @return \Illuminate\Http\Response
     */
    public function editParrainExt()
    {
        $parrains = auth()->user()->parrains_ext()->where('type', 'Parrain')->get();

        return view('profile.editParrainExt', compact('parrains'));
    }

    /**
     * Add the parrain to the user
     *
     * @param  User  $parrain
     * @return \Illuminate\Http\Response
     */
    public function addParrainExt(Request $request)
    {
        $this->validate($request, [
            'nom' => 'required',
            'prenom' => 'required',
            'annee' => ['required', 'integer', 'min:2000', 'max:'.date('Y')],
        ]);
        
        $user_ext = new ExterieurUser;
        $user_ext->nom = $request->input('nom');
        $user_ext->prenom = $request->input('prenom');
        $user_ext->surnom = $request->input('surnom');
        $user_ext->user_id = auth()->user()->id;
        $user_ext->annee = $request->input('annee');
        $user_ext->faculte = $request->input('faculte');
        $user_ext->type = 'Parrain';
        $user_ext->save();


        return redirect('/profile/editParrainExt')->with('success', 'Parrain ajouté');
    }

    /**
     * Remove the parrain from the user
     *
     * @param  User  $parrain
     * @return \Illuminate\Http\Response
     */
    public function removeParrainExt(ExterieurUser $parrain)
    {
        $parrain->delete();

        return redirect('/profile/editParrainExt')->with('success', 'Parrain retiré');
    }

    /** ----------------------------------------------------------------------------
     * List the bleus of the user
     *
     * @return \Illuminate\Http\Response
     */
    public function editBleuExt()
    {
        $bleus = auth()->user()->bleus_ext()->where('type', 'Bleu')->get();

        return view('profile.editBleuExt', compact('bleus'));
    }

    /**
     * Add the bleu to the user
     *
     * @param  User  $bleu
     * @return \Illuminate\Http\Response
     */
    public function addBleuExt(Request $request)
    {
        $this->validate($request, [
            'nom' => 'required',
            'prenom' => 'required',
            'annee' => ['required', 'integer', 'min:2000', 'max:'.date('Y')],
        ]);
        
        $user_ext = new ExterieurUser;
        $user_ext->nom = $request->input('nom');
        $user_ext->prenom = $request->input('prenom');
        $user_ext->surnom = $request->input('surnom');
        $user_ext->user_id = auth()->user()->id;
        $user_ext->annee = $request->input('annee');
        $user_ext->faculte = $request->input('faculte');
        $user_ext->type = 'Bleu';
        $user_ext->save();


        return redirect('/profile/editBleuExt')->with('success', 'Bleu ajouté');
    }

    /** 
     * Remove the bleu from the user
     *
     * @param  User  $bleu
     * @return \Illuminate\Http\Response
     */
    public function removeBleuExt(ExterieurUser $bleu)
    {
        $bleu->delete();

        return redirect('/profile/editBleuExt')->with('success', 'Bleu retiré');
    }

    /** 
     * Return the profile image
     *
     * @param  annee_bepteme
     * @param  url
     * @return \Illuminate\Http\Response
     */
    public function image(User $user)
    {
        $img = \Image::make(storage_path('app/public/profile/'. $user->annee_bapteme .'/'. $user->photo))->fit(600, 600);
        return $img->response();
    }

    /** 
     * Return the user matching the request
     *
     * @param  \Illuminate\Http\Request
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request)
    {
        if($request->keywords == "")
        {
            return response()->json(array());
        }
            
        $token = explode(' ', $request->keywords);
        $users = User::where('name', 'like', '%'.$request->keywords.'%')->orWhere('prenom', 'like', '%'.$request->keywords.'%')->orWhere('annee_bapteme',$request->keywords)->orWhere('droit', $request->keywords);
        $users->when($token, function($q, $token) {
            if(count($token) > 1)
                return $q->orWhere([['prenom', 'like', '%'.$token[0].'%'],['name', 'like', '%'.$token[1].'%']])->orWhere([['name', 'like', '%'.$token[0].'%'],['prenom', 'like', '%'.$token[1].'%']]);
            else
                return $q;
        });
        return response()->json($users->orderBy('annee_bapteme','desc')->orderBy('name')->get());
    }

}
