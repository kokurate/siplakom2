<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PengaduanModel;

$db      = \Config\Database::connect();
$builder = $db->table('pengaduan');



use CodeIgniter\HTTP\Request;

// Fungsi for random string
helper('text');
class Tujuan extends BaseController
{
    protected $pengaduanModel;
    public function __construct()
    {
        $this->pengaduanModel = new PengaduanModel();
    }

    // Cuman ambe dpe method update
    public function index()
    {
    }

    public function edit($id)
    {
        // session();
        $data = [
            'tittle' => 'Update Tujuan Pengaduan',
            'validation' => \Config\Services::validation(),
            'pengaduan' => $this->pengaduanModel->getPengaduan($id),
            // 'all' => $this->pengaduanModel->where('status'),
            // 'proses' => $this->pengaduanModel->where('status', 'Pengaduan Sedang Diproses')

        ];
        return view('tujuan/edit', $data);
    }

    public function update($id)
    {
        // Validasi Input
        if (!$this->validate([
            'tujuan_pengaduan' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Tujuan Pengaduan harus diisi',
                    // 'min_length' => 'Tanggapan harus lebih dari 100 karakter'
                ]
            ]


        ])) {
            $validation = \Config\Services::validation();

            return redirect()->to('/tujuan/edit/' . $id)->withInput()->with('validation', $validation);
        }


        // Ambe samua data yang ada input trus insert ka database
        $this->pengaduanModel->save([
            'id' => $id,
            'nama' => $this->request->getVar('nama'),
            'no_hp' => $this->request->getVar('no_hp'),
            'email' => $this->request->getVar('email'),
            'judul_laporan' => $this->request->getVar('judul_laporan'),
            'isi_laporan' => $this->request->getVar('isi_laporan'),
            'foto' => $this->request->getVar('foto'),
            'status' => $this->request->getVar('status'),
            'keterangan' => $this->request->getVar('keterangan'),
            'kode' => $this->request->getVar('kode'),
            'tujuan_pengaduan' => $this->request->getVar('tujuan_pengaduan')
        ]);

        session()->setFlashdata('pesan', 'Data berhasil diupdate');

        return redirect()->to('/petugas/' . $id);
    }
}
