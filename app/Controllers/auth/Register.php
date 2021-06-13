<?php

namespace App\Controllers\auth;

use App\Controllers\BaseController;
use App\Models\PengaduanModel;

class Register extends BaseController
{
    public function index()
    {
        $data = [
            'tittle' => "SIPLAKOM Daftar Petugas"
        ];
        return view('auth/register', $data);
    }
}
