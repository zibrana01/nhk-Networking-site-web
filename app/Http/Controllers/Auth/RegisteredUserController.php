<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Models\Client;
use Illuminate\View\View;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;
use Illuminate\Auth\Events\Registered;
use App\Providers\RouteServiceProvider;
use RealRashid\SweetAlert\Facades\Alert;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {

         //validation des champs

         $request->validate([
            'firstname'=> "required|string|max:255",
            'lastname'=> "required|string|max:255",
            'email'=> "required|email|lowercase|max:255|unique:clients",
            'phone_number'=> "required|string|max:18",
            'adresse' => "required|string|max:255"

        ]);

        $password = Str::random(8);

        $user = User::create([
                 'name' =>strtoupper(substr($request->input('lastname'), 0, 1)) . strtolower($request->input('firstname')),
                 'email' => $request->input('email'),
                 'email_verified_at' => now(),
                 'password' => Hash::make($password),
                 'remember_token' => Str::random(10),
             ]);
        //verify the exitence of client in base

        $existClient = Client::where('email', $request->email)->first();
       
        if(!$existClient){
            $client = new Client();
            $client->firstname = $request->input('firstname');
            $client->lastname = $request->input('lastname');
            $client->email = $request->input('email');
            $client->phone_number = $request->input('phone_number');
            $client->adresse = $request->input('adresse');

          

            $client->save();

            alert()->success('Succès', 'Votre compte a été créé avec succès!');

            return redirect('/login')->with('Success', 'Votre compte a été créé avec succès!');

        }else{
            return redirect()->back()->withInput($request->only('name', 'email'))->withErrors(['email' => 'Cet email est déjà utilisé.']);

        }
        // $request->validate([
        //     'name' => ['required', 'string', 'max:255'],
        //     'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
        //     'password' => ['required', 'confirmed', Rules\Password::defaults()],
        // ]);

        // $user = User::create([
        //     'name' => $request->name,
        //     'email' => $request->email,
        //     'password' => Hash::make($request->password),
        // ]);

        // event(new Registered($user));

        // Auth::login($user);

        // return redirect(RouteServiceProvider::HOME);
    }
}
