<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dtusers = User::all();
        return view('admin.users.index', compact('dtusers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = User::create([
            'name' => $request->name,
            'nickname' => $request->nickname,
            'email' => $request->email,
            'nim' => $request->nim,
            'password' => Hash::make($request->password),
            'role' => $request->role,
            'saldo' => $request->saldo,
            'phone' => $request->phone,
            'jurusan' => $request->jurusan,
            'fakultas' => $request->fakultas,
            'semester' => $request->semester,
        ]);

        if ($user) {
            return redirect()->route('users')->with('status', 'Data has been Added!');
        } else {
            return redirect()->route('users')->with('error', 'Something went wrong!');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $dtusers = User::findOrFail($id);
        return view('admin.users.view', compact('dtusers'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dtusers = User::findOrFail($id);
        return view('admin.users.edit', compact('dtusers'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if ($request->password) {

            $request->validate([
                'password' => [Rules\Password::defaults()],
            ]);
        }

        $dtusers = User::find($id);

        if (!$dtusers) {
            return redirect()->route('users')->with('error', 'Something went wrong!');
        }

        $dtusers->update([
            'name' => $request->name,
            'nickname' => $request->nickname,
            'email' => $request->email,
            'nim' => $request->nim,
            'role' => $request->role,
            'saldo' => $request->saldo,
            'phone' => $request->phone,
            'jurusan' => $request->jurusan,
            'fakultas' => $request->fakultas,
            'semester' => $request->semester,
        ]);

        if ($request->password) {
            $dtusers->update([
                'password' => Hash::make($request->password),
            ]);
        }

        if ($dtusers) {
            return redirect()->route('users')->with('status', 'Data has been Added!');
        } else {
            return redirect()->route('users')->with('error', 'Something went wrong!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dtusers = User::findOrFail($id);

        $dtusers->delete();

        return redirect()->route('users')->with('status', 'Data has been removed!');
    }
}
