<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function profile()
    {
        // Data yang akan dikirim ke view
        $data = [
            'nama' => 'Marcela Hayati',
            'kelas' => 'D3 Manajemen Informatika',
            'npm' => '2307051023',
        ];

        // Mengirim data ke view profile
        return view('profile', $data);
    }
}
