<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Validation\Rules;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Hash;

class PenggunaController extends Controller
{
    public function index() {
        $datas = User::all();
        //dd($datas);
        return view('admin.pages.pengguna.index', compact(['datas']));
    }

    public function create() {
        return view('admin.pages.pengguna.create');
    }

    public function store(Request $request) {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'role' => ['required', 'string']
        ]);

        //dd($request->all());

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => $request->role
        ]);

        event(new Registered($user));

        //Auth::login($user);

        return response()->json(['message' => 'Berhasil membuat user baru']);
    }
}
