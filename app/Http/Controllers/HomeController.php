<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Notification;
use App\Notifications\NewContactMessage;
use Illuminate\Validation\Rule;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('welcome');
    }

    /**
     * Contact form
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function contact(Request $request)
    {
        $this->validate($request, [
            'nom' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'cb' => ['nullable', 'string', 'max:255'],
            'test' => [
                'required',
                function ($attribute, $value, $fail) {
                    if (strtolower($value) !== 'blanc') {
                        $fail('Le cheval blanc de Napoléon est blanc !');
                    }
                },
            ],
            'message' => ['required', 'string', 'max:4000']
        ]);

        $cb = $request->input('cb');

        if($cb)
        {
            $cb = ' du comité '.$cb;
        }

        $toges = User::where('droit', '<', '4')->get();

        foreach($toges as $toge)
        {
            mail($toge->eamil, "Nouveau message", "Vous avez un nouveau message de ".$request->input('nom').". N'héstiez pas à lui répondre à l'adresse ".$request->input('email')."<br/>".$request->input('message'));
        }

        return redirect('/')->with('success', 'Message envoyé');
    }



}
