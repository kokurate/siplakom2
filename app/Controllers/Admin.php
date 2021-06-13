<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PengaduanModel;



class Admin extends BaseController
{

    protected $pengaduanModel;
    public function __construct()
    {
        $this->pengaduanModel = new PengaduanModel();
    }


    public function index()
    {
        $db      = \Config\Database::connect();

        $data = [
            'tittle' => 'Admin Dashboard',


            'semua' => $db->query('SELECT * FROM Pengaduan'),
            'masuk' => $db->query('SELECT * FROM Pengaduan Where status="Pengaduan Sedang Diverifikasi"'),
            'tolak' => $db->query('SELECT * FROM Pengaduan Where status="Pengaduan Ditolak"'),
            'selesai' => $db->query('SELECT * FROM Pengaduan Where status="Pengaduan Selesai"'),


        ];
        return view('admin/index', $data);
    }
}
