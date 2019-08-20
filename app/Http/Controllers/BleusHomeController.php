<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Notification;
use App\Notifications\NewContactMessage;
use Illuminate\Validation\Rule;

class BleusHomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('bleus/bleuswelcome');
    }
    public function informations(){
        return view('bleus/informations');
    }
    public function folklore(){
        return view('bleus/bleusfolklore');
    }
    public function faq(){
        return view('bleus/faq');
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

        $comite = User::where('droit', '<', '4')->get();
        if($comite){
            Notification::send($comite, new NewContactMessage($request->input('nom'), $request->input('email'), $cb, $request->input('message')));
        }

        return redirect('/')->with('success', 'Message envoyé');
    }



}
