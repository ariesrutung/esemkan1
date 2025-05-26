<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SchIdentity;
use Illuminate\Http\Request;

class IdentityController extends Controller
{
    public function index()
    {
        $identity = SchIdentity::pluck('value', 'key');
        $pageTitle = 'Identitas Sekolah';

        return view('wp-admin.pages.identity', compact('identity', 'pageTitle'));
    }

    public function update(Request $request)
    {
        $data = $request->input('identity');

        foreach ($data as $key => $value) {
            SchIdentity::updateOrCreate(
                ['key' => $key],
                ['value' => $value]
            );
        }

        return redirect()->back()->with('success', 'Identitas berhasil diperbarui.');
    }
}
