<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;

class AdminController extends Controller
{
    public function showDataAdmin () {
        $dataAdmin = User::all();
        return view('admin.data-admin', compact('dataAdmin'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|confirmed',
        ], [
            'email.unique' => 'Email Sudah Digunakan Oleh Pengguna Lain.',
            'password.confirmed' => 'Password Anda Tidak Cocok',
        ]);

        if ($validator->fails()) {
            Alert::error('Error', $validator->errors()->first());
            return redirect()->back()->withInput();
        }

        $existingUser = User::where('email', $request->email)->first();
        if ($existingUser) {
            Alert::error('Error', 'Email Sudah Digunakan Oleh Pengguna Lain.');
            return redirect()->back()->withInput();
        }

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();

        Alert::success('Success', 'Data Admin Berhasil Ditambahkan');

        return redirect()->back();
    }

   public function update(Request $request, $id)
    {
        // Define validation rules with custom error messages
       $rules = [
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:users,email,' . $id,
        'current_password' => ['required', function ($attribute, $value, $fail) use ($request) {
            if ($request->filled('new_password')) {
                if (empty($value)) {
                    $fail('Mohon Isi Password Yang Sudah Terdaftar');
                }
            }
        }],
    ];

        if ($request->filled('new_password')) {
            $rules['new_password'] = 'required|string|confirmed';
        }

        $messages = [
            'email.unique' => 'Email Anda Sudah Terpakai Oleh Pengguna Lain.',
            'new_password.confirmed' => 'Anda Salah Menginputkan Konfirmasi Password Baru',
            'current_password.required' => 'Mohon Isi Password Yang Sudah Terdaftar',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            Alert::error('Error', $validator->errors()->first());
            return redirect()->back()->withInput();
        }

        $user = User::findOrFail($id);

        if (!Hash::check($request->current_password, $user->password)) {
            Alert::error('Error', 'Anda Salah Menginputkan Password Yang Terdaftar');
            return redirect()->back()->withInput();
        }

        $user->name = $request->name;
        $user->email = $request->email;

        if ($request->filled('new_password')) {
            $user->password = Hash::make($request->new_password);
        }

        $user->save();

        Alert::success('Success', 'Data Admin Berhasil Diperbaharui!');

        return redirect()->back();
    }

    public function delete(Request $request, $id) {
        $user = User::find($id);
        if (!$user) {
            return response()->json(['success' => false, 'message' => 'User not found'], 404);
        }

        if (!Hash::check($request->password, $user->password)) {
            return response()->json(['success' => false, 'message' => 'Incorrect password'], 403);
        }

        $user->delete();
        return response()->json(['success' => true, 'message' => 'User deleted successfully']);
    }
}
