<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Password;

class RegisterUserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

    $userAtrributes= $request->validate(
            [
            'name'=>['required'],
            'email'=>['required','email','max:50','min:10','unique:users,email'],
            'password'=>['required','confirmed',Password::min(6)],
            ] );

        $addressAttributes = $request->validate(
            [
                'address' => ['required'],
                'city' => ['required'],
                'country' => ['required'],
                'state' => ['required'],
                'zipcode' => ['required'],
            ]
        );
                $user = User::create($userAtrributes);



                    $user->address()->create([
 'address' => $addressAttributes['address'],
 'city' => $addressAttributes['city'],
 'country' => $addressAttributes['country'],
 'state' => $addressAttributes['state'],
 'zipcode' => $addressAttributes['zipcode'], ]);
                    // @dd($user);
                    Auth::login($user);
                    return redirect('/');
      
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }
}
