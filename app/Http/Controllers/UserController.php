<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('showpengguna.index', ['users' => $users]);
    }

    public function create()
    {
        return view('inputpengguna.create');
    }

    public function store(Request $request)
    {
        $input = $request->input('data');
        list($name, $age, $city) = explode(' ', strtoupper($input), 3);
        $age = preg_replace('/\b(TAHUN|THN|TH)\b/i', '', $age);

        User::create([
            'name' => $name,
            'age' => $age,
            'city' => $city,
        ]);

        return redirect()->route('inputpengguna.index')->with('success', 'Data pengguna berhasil disimpan.');
    }
}
