<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class ProfileController extends BaseController
{
    public function index()
    {
        $user = auth()->user();

        $data = [
            'title' => 'Profil Saya',
            'user'  => $user,
        ];

        return view('profile/index', $data);
    }

    public function update()
    {
        // Tempat penanganan simpan data profil (akan kita lengkapi bertahap)
        return redirect()->back()->with('message', 'Profil berhasil diperbarui!');
    }
}
