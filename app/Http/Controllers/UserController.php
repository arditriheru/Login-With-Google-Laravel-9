<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\Mhs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        return view('user', [
            'user'   => Auth::user(),
        ]);
    }

    public function register()
    {
        $data['title']      = 'Registrasi';
        $data['subtitle']   = 'Daftar Akun Baru';

        return view('mhs/register', $data);
    }

    public function register_action(Request $request)
    {
        $request->validate([
            'name'                      => 'required',
            'email'                     => 'required|email|unique:users',
            'password'                  => 'required',
            'password_confirmation'     => 'required|same:password',
        ]);
        $user = new Mhs([
            'name'              => $request->name,
            'email'             => $request->email,
            'password'          => Hash::make($request->password),
        ]);
        if ($user->save()) {
            return redirect()->route('login')->with('success', 'Berhasil mendaftar. Silahkan Login!');
        }
        return redirect()->route('register')->with('error', 'Gagal mendaftar. Silahkan dicoba lagi!');
    }
}
