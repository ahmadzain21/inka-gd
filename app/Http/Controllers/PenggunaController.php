<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Validation\Rules;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\History;
use Illuminate\Support\Facades\Gate;

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
            'nip' => ['required', 'string', 'max:16', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'role' => ['required', 'string']
        ]);

        //dd($request->all());

        $user = User::create([
            'name' => $request->name,
            'nip' => $request->nip,
            'password' => Hash::make($request->password),
            'role' => $request->role
        ]);

        event(new Registered($user));

        History::create([
            'action' => Auth::user()->name.' menambahkan pengguna baru dengan role ' . $request->role . ' pada ' .now(),
            'user_id' => Auth::user()->id,
            'tanggal' => now()->format('Y-m-d')
        ]);

        //Auth::login($user);

        return response()->json(['message' => 'Berhasil membuat user baru']);
    }

    public function resetPassword(string $nip) {
        $user = User::where('nip', $nip)->first();

        //dd($user);

        if(!$user) {
            return back()->with('error', 'User tidak ditemukan.');
        }

        $user->password = Hash::make($user->nip);
        $user->save();

        
        if(Gate::allows('isAdmin')) {
            History::create([
                'action' => Auth::user()->name.' melakukan reset password pengguna dengan nip ' . $nip . ' pada ' .now(),
                'user_id' => Auth::user()->id,
                'tanggal' => now()->format('Y-m-d')
            ]);
        } else {
            History::create([
                'action' => Auth::user()->name.' melakukan reset password pada ' .now(),
                'user_id' => Auth::user()->id,
                'tanggal' => now()->format('Y-m-d')
            ]);
        }

        return redirect()->back()->with('status', 'Password berhasil direset menjadi NIP.');
    }
}
