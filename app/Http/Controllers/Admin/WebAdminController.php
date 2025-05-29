<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class WebAdminController extends Controller
{
    public function index()
    {
        $pageTitle = 'Pengelola Web';
        $webadmin = User::all();


        return view('wp-admin.pages.webadmin', compact('webadmin', 'pageTitle'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:6',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        return redirect()->route('admin.webadmin.index')->with('success', 'Pengguna berhasil ditambahkan.');
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->route('admin.webadmin.index')->with('success', 'Pengguna berhasil dihapus.');
    }
}
