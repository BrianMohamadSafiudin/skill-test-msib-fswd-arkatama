<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('showpengguna', ['users' => $users]);
    }

    public function create()
    {
        return view('inputpengguna');
    }

    public function store(Request $request)
    {
        $input = $request->input('data');

        $values = explode(' ', strtoupper($input));

        $name = $values[0] ?? '';
        $age = preg_replace('/\D/', '', $values[1] ?? '');
        $city = $values[2] ?? '';

        $users = new User();
        $users->name = $name;
        $users->age = $age;
        $users->city = $city;
        $users->save();

        return redirect()->route('inputpengguna.create')->with('success', 'Data pengguna berhasil disimpan.');
    }

}
