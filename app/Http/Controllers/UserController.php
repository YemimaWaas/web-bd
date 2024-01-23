<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('admin.user.index', ['users' => $users]);
    }

    public function create()
    {
        return view('admin.user.create');
    }

    public function store(Request $request)
    {
        // Validasi data dari $request
        $this->validate($request, [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users,email,' . $user->id,
            'is_admin' => 'nullable|boolean',
            'password' => 'required|string|min:6',
        ], [
            'name.required' => 'Nama harus diisi.',
            'email.required' => 'Email harus diisi.',
            'email.email' => 'Format email tidak valid.',
            'email.unique' => 'Email sudah digunakan oleh pengguna lain.',
            'password.required' => 'Password harus diisi.',
            'password.min' => 'Password minimal harus 6 karakter.',]);

            if ($this->fails()) {
                return redirect()->back()
                    ->withErrors($validator)
                    ->withInput();
            }


        $userData = $request->all();
        $userData['is_admin'] = $request->has('is_admin') ? 1 : 0;

        User::create($userData);

        return redirect()->route('user');
    }


    public function edit($id)
    {
        $user = User::find($id);
        return view('admin.user.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $user = User::find($id);

        // Update data user sesuai dengan input form
        $user->update([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'is_admin' => $request->has('is_admin') ? 1 : 0,]);

        return redirect()->route('user');
    }

    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();

        return redirect()->route('user');
    }

}

