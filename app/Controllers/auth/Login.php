<?php

namespace App\Controllers\auth;

use App\Controllers\BaseController;
use App\Models\PengaduanModel;

class Login extends BaseController
{
    public function index()
    {
        $data = [
            'tittle' => "SIPLAKOM Login"
        ];
        return view('auth/login', $data);
    }
}
