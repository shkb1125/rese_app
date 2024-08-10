<?php

namespace App\Http\Controllers;

use App\Actions\Fortify\CreateNewUser;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    protected $createNewUser;

    public function __construct(CreateNewUser $createNewUser)
    {
        $this->createNewUser = $createNewUser;
    }

    public function create()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        $user = $this->createNewUser->create($request->all());

        event(new Registered($user));
        Auth::login($user);

        return redirect()->route('thanks');
    }

    public function thanks()
    {
        return view('auth.thanks');
    }
}
