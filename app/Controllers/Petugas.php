<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PengaduanModel;

$db      = \Config\Database::connect();
$builder = $db->table('pengaduan');



helper('text');

class Petugas extends BaseController
{

    // {
    //     //da login nda? <> : redirect ke login
    //     dpe
    //     $tipe_user = 1
    //     if ($tipe_user == 1) {

    //     } else {
    //         redirect->?
    //     }

    // }


    protected $pengaduanModel;
    public function __construct()
    {
        $this->pengaduanModel = new PengaduanModel();
    }



    public function index()
    {
        $db      = \Config\Database::connect();

        // $pengaduan = $this->pengaduanModel->findAll();
        $data = [
            'tittle' => 'SIPLAKOM | Petugas',
            // 'pengaduan' => $this->pengaduanModel->getPengaduan(),

            // Kalo depe status pengajuan baru tampilkan samua mar cuman yang baru
            'pengaduan' => $this->pengaduanModel->where('status', 'Pengaduan Sedang Diverifikasi')->findAll(),
            // Count Result

            'jaringan' => $db->query('SELECT * FROM Pengaduan Where tujuan_pengaduan="Jaringan" && status="Pengaduan Sedang Diproses"'),
            'server' => $db->query('SELECT * FROM Pengaduan Where tujuan_pengaduan="Server" && status="Pengaduan Sedang Diproses"'),
            'sistem_informasi' => $db->query('SELECT * FROM Pengaduan Where tujuan_pengaduan="Sistem Informasi" && status="Pengaduan Sedang Diproses"'),
            'website_unima' => $db->query('SELECT * FROM Pengaduan Where tujuan_pengaduan="Website UNIMA" && status="Pengaduan Sedang Diproses" '),
            'lms' => $db->query('SELECT * FROM Pengaduan Where tujuan_pengaduan="LMS" && status="Pengaduan Sedang Diproses" '),

            'semua' => $db->query('SELECT * FROM Pengaduan'),
            'masuk' => $db->query('SELECT * FROM Pengaduan Where status="Pengaduan Sedang Diverifikasi"'),
            'tolak' => $db->query('SELECT * FROM Pengaduan Where status="Pengaduan Ditolak"'),
            'selesai' => $db->query('SELECT * FROM Pengaduan Where status="Pengaduan Selesai"'),

        ];

        // // $pengaduaModel = new \App\Models\PengaduanModel();
        // $pengaduanModel = new PengaduanModel();
        // $pengaduan = $pengaduanModel->findAll();
        // dd('pengaduan');

        return view('petugas/index', $data);
    }


    public function semua()
    {
        $db      = \Config\Database::connect();

        // $pengaduan = $this->pengaduanModel->findAll();
        $data = [
            'tittle' => 'Semua Pengaduan',
            // 'pengaduan' => $this->pengaduanModel->getPengaduan(),

            'pengaduan' => $this->pengaduanModel->findAll(),
            // Count Result
        ];

        return view('petugas/semua', $data);
    }



    public function masuk()
    {
        $db      = \Config\Database::connect();

        // $pengaduan = $this->pengaduanModel->findAll();
        $data = [
            'tittle' => 'SIPLAKOM | Masuk',
            // 'pengaduan' => $this->pengaduanModel->getPengaduan(),

            // Kalo depe status pengajuan baru tampilkan samua mar cuman yang baru
            'pengaduan' => $this->pengaduanModel->where('status', 'Pengaduan Sedang Diverifikasi')->findAll(),
            // Count Result


        ];

        // // $pengaduaModel = new \App\Models\PengaduanModel();
        // $pengaduanModel = new PengaduanModel();
        // $pengaduan = $pengaduanModel->findAll();
        // dd('pengaduan');

        return view('petugas/masuk', $data);
    }

    // Proses
    // =========================================================================================
    public function proses()
    {

        $data = [
            'tittle' => 'Pengaduan diproses',

            // Kalo depe status pengajuan baru tampilkan samua mar cuman yang proses
            'pengaduan' => $this->pengaduanModel->where('status', 'Pengaduan Sedang Diproses')->findAll()
        ];

        return view('petugas/proses', $data);
    }

    // public function proses_detail($id)
    // {
    //     $data = [
    //         'tittle' => "Detail Proses Pengaduan",
    //         'pengaduan' => $this->pengaduanModel->getPengaduan($id)
    //     ];
    //     return view('petugas/proses/proses_detail', $data);
    // }

    // public function proses_edit($id)
    // {
    //     // session();
    //     $data = [
    //         'tittle' => 'Update Data Pengaduan',
    //         'validation' => \Config\Services::validation(),
    //         'pengaduan' => $this->pengaduanModel->getPengaduan($id)
    //     ];
    //     return view('petugas/proses/proses_edit', $data);
    // }

    // =========================================================================================    

    public function tolak()
    {

        $data = [
            'tittle' => 'Pengaduan ditolak',

            // Kalo depe status pengajuan baru tampilkan samua mar cuman yang proses
            'pengaduan' => $this->pengaduanModel->where('status', 'Pengaduan Ditolak')->findAll()
        ];

        return view('petugas/tolak', $data);
    }

    public function selesai()
    {

        $data = [
            'tittle' => 'Pengaduan Selesai',

            // Kalo depe status pengajuan baru tampilkan samua mar cuman yang proses
            'pengaduan' => $this->pengaduanModel->where('status', 'Pengaduan Selesai')->findAll()
        ];

        return view('petugas/selesai', $data);
    }



    public function jaringan()
    {

        $data = [
            'tittle' => 'Pengaduan Jaringan',

            // Kalo depe status pengajuan baru tampilkan samua mar cuman yang proses
            'pengaduan' => $this->pengaduanModel->where('tujuan_pengaduan', 'Jaringan')->where('status', 'Pengaduan Sedang Diproses')->findAll()
        ];

        return view('petugas/staff/jaringan', $data);
    }


    public function server()
    {

        $data = [
            'tittle' => 'Pengaduan Server',

            // Kalo depe status pengajuan baru tampilkan samua mar cuman yang proses
            'pengaduan' => $this->pengaduanModel->where('tujuan_pengaduan', 'Server')->where('status', 'Pengaduan Sedang Diproses')->findAll()
        ];

        return view('petugas/staff/server', $data);
    }


    public function sistem_informasi()
    {

        $data = [
            'tittle' => 'Pengaduan Sistem Informasi',

            // Kalo depe status pengajuan baru tampilkan samua mar cuman yang proses
            'pengaduan' => $this->pengaduanModel->where('tujuan_pengaduan', 'Sistem Informasi')->where('status', 'Pengaduan Sedang Diproses')->findAll()
        ];

        return view('petugas/staff/sistem_informasi', $data);
    }


    public function website_unima()
    {

        $data = [
            'tittle' => 'Pengaduan Website UNIMA',

            // Kalo depe status pengajuan baru tampilkan samua mar cuman yang proses
            'pengaduan' => $this->pengaduanModel->where('tujuan_pengaduan', 'Website UNIMA')->where('status', 'Pengaduan Sedang Diproses')->findAll()
        ];

        return view('petugas/staff/website_unima', $data);
    }


    public function lms()
    {

        $data = [
            'tittle' => 'Pengaduan LMS',

            // Kalo depe status pengajuan baru tampilkan samua mar cuman yang proses
            'pengaduan' => $this->pengaduanModel->where('tujuan_pengaduan', 'LMS')->where('status', 'Pengaduan Sedang Diproses')->findAll()
        ];

        return view('petugas/staff/lms', $data);
    }




    //     public function baru(){
    // $data = [
    //     'tittle' = 'Pengaduan Masuk',
    //     'pengaduan' =>$this->pengaduanModel->where('status','Pengaduan Sedang Diverifikasi')
    // ];
    //     }
    //     return view 

    public function detail($id)
    {
        $data = [
            'tittle' => "Detail Petugas Pengaduan",
            'pengaduan' => $this->pengaduanModel->getPengaduan($id)
        ];

        // // jika pengaduan tidak ada di tabel / om sandika pake slug qt nd jadi dpe 404 disini nda talalu berguna 
        // if (empty($data['pengaduan'])) {
        //     throw new \CodeIgniter\Exceptions\PageNotFoundException('Judul pengaduan' . $id . 'tidak ditemukan');
        // }

        return view('petugas/detail', $data);
    }

    // public function tujuan_pengaduan($id)
    // {
    //     // session();
    //     $data = [
    //         'tittle' => 'Update Tujuan Pengaduan',
    //         'validation' => \Config\Services::validation(),
    //         'pengaduan' => $this->pengaduanModel->getPengaduan($id),
    //         // 'all' => $this->pengaduanModel->where('status'),
    //         // 'proses' => $this->pengaduanModel->where('status', 'Pengaduan Sedang Diproses')

    //     ];
    //     return view('petugas/tujuan_pengaduan', $data);
    // }


    public function edit($id)
    {
        // session();
        $data = [
            'tittle' => 'Update Data Pengaduan',
            'validation' => \Config\Services::validation(),
            'pengaduan' => $this->pengaduanModel->getPengaduan(($id)),
            // 'all' => $this->pengaduanModel->where('status'),
            // 'proses' => $this->pengaduanModel->where('status', 'Pengaduan Sedang Diproses')

        ];

        session()->setFlashdata('pesan', 'Data berhasil diupdate');

        return view('petugas/edit', $data);
    }

    public function delete($id)
    {
        // cari gambar berdasarkan id
        $pengaduan = $this->pengaduanModel->find($id);


        // cek jika file gambarnya default.png
        if ($pengaduan['foto'] != 'default.png') {

            // Hapus gambar dari folder img
            unlink('img/' . $pengaduan['foto']);
        }

        // kalo file bukang default.png hapus data dari tabell
        $this->pengaduanModel->delete($id);
        session()->setFlashdata('pesan', 'Data Berhasil Dihapus.');

        return redirect()->to('/petugas');
    }

    public function update($id)
    {
        // Validasi Input
        if (!$this->validate([
            'status' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} pengaduan harus diisi'
                ]
            ],

            'keterangan' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Tanggapan harus diisi',
                    // 'min_length' => 'Tanggapan harus lebih dari 100 karakter'
                ]
            ],

            "foto_petugas" => [
                // rules deleted uploaded[foto]|
                // 'uploaded' => 'Pilih Gambar Terlebih Dahulu',
                'rules' => 'max_size[foto_petugas,2048]|is_image[foto_petugas]|mime_in[foto_petugas,image/jpg ,image/jpeg,image/png]',
                'errors' => [

                    'max_size' => 'Ukuran gambar tidak boleh lebih dari 2MB',
                    'is_image' => 'Yang anda pilih bukan gambar',
                    'mime_in' => 'Yang anda pilih bukan gambar'
                ]

            ],



            // "foto_petugas2" => [
            //     // rules deleted uploaded[foto]|
            //     // 'uploaded' => 'Pilih Gambar Terlebih Dahulu',
            //     'rules' => 'is_image[foto_petugas2]|mime_in[foto_petugas2,image/jpg ,image/jpeg,image/png]',
            //     'errors' => [

            //         'max_size' => 'Ukuran gambar tidak boleh lebih dari 2MB',
            //         'is_image' => 'Yang anda pilih bukan gambar',
            //         'mime_in' => 'Yang anda pilih bukan gambar'
            //     ]
            // ],

            // 'tujuan_pengaduan' => [
            //     'rules' => 'required',
            //     'errors' => [
            //         'required' => 'Tujuan Pengaduan harus diisi',
            //         // 'min_length' => 'Tanggapan harus lebih dari 100 karakter'
            //     ]
            // ]



        ])) {
            //$validation = \Config\Services::validation();

            // return redirect()->to('/petugas/edit/' . $id)->withInput()->with('validation', $validation);
            return redirect()->to('/petugas/edit/' . $id)->withInput();
        }

        // Pengaduan sedang diverifikasi
        // ambil gambar 1 dulu 
        $fileFotopetugas = $this->request->getFile('foto_petugas');

        // Cek apakah tidak ada gambar yang diupload
        if ($fileFotopetugas->getError() == 4) {
            $namaFotopetugas = 'default.png';
        } else {

            // Generate nama foto random
            $namaFotopetugas = $fileFotopetugas->getRandomName();

            // pindahkan file ke folder img
            $fileFotopetugas->move('img', $namaFotopetugas);

            // ambil nama file img (bagini so boleh sih karena dia auto name biar nama sama)
            // $namaFoto = $fileFoto->getName();
        }
        // =======================================================================
        // sebelum insert
        // ambil gambar 2 dulu 
        // $fileFotopetugas2 = $this->request->getFile('foto_petugas2');
        // if ($fileFotopetugas2->getError() == 4) {
        //     $namaFotopetugas2 = '';
        // } else {

        //     // Generate nama foto random
        //     $namaFotopetugas2 = $fileFotopetugas2->getRandomName();

        //     // pindahkan file ke folder img
        //     $fileFotopetugas2->move('img', $namaFotopetugas2);

        //     // ambil nama file img (bagini so boleh sih karena dia auto name biar nama sama)
        //     // $namaFoto = $fileFoto->getName();
        // }
        // =========================================================================
        // Ambe gambar 3
        // $fileFoto3 = $this->request->getFile('foto3');
        // if ($fileFoto3->getError() == 4) {
        //     $namaFoto3 = '';
        // } else {

        //     // Generate nama foto random
        //     $namaFoto3 = $fileFoto3->getRandomName();

        //     // pindahkan file ke folder img
        //     $fileFoto3->move('img', $namaFoto3);
        // }



        $status = $this->request->getVar('status');
        $nama = $this->request->getVar('nama');
        $emailuser = $this->request->getVar('email');
        $keterangan = $this->request->getVar('keterangan');
        $title = 'Notifikasi SIPLAKOM';
        $kode = $this->request->getVar('kode');
        // Ambe samua data yang ada input trus insert ka database
        $this->pengaduanModel->save([
            'id' => $id,
            'nama' => $this->request->getVar('nama'),
            'no_hp' => $this->request->getVar('no_hp'),
            'email' => $this->request->getVar('email'),
            'judul_laporan' => $this->request->getVar('judul_laporan'),
            'isi_laporan' => $this->request->getVar('isi_laporan'),
            'foto' => $this->request->getVar('foto'),
            'foto2' => $this->request->getVar('foto2'),
            'foto3' => $this->request->getVar('foto3'),
            'status' => $this->request->getVar('status'),
            'keterangan' => $this->request->getVar('keterangan'),
            'kode' => $this->request->getVar('kode'),
            'tujuan_pengaduan' => $this->request->getVar('tujuan_pengaduan'),
            'foto_petugas' => $namaFotopetugas,
            // 'foto_petugas2' => $namaFotopetugas2

        ]);

        $pengaduan = $this->pengaduanModel->getPengaduan($id);

        // Jika pengaduan "Status" tampilkan pesan ini
        // Verifikasi
        if ($pengaduan['status'] == "Pengaduan Sedang Diverifikasi") :
            $message =
                "<h1>Status Pengaduan</h1><h3>Halo, " . "<strong><i>" . $nama . "</i></strong></h3>"
                . "<br>"
                . "Kode Pengaduan Anda"
                . "<br>"
                . "<strong><i>" . $kode . "</i></strong>"
                . "<br>" . "<br>"
                . "Status Pengaduan Anda Saat Ini adalah : "
                . "<br>"
                . "<strong>" . $status . "</strong>"
                . "<br>" . "<br>"
                . "Silahkan Kunjungi Website SIPLAKOM Untuk Informasi Lebih Lanjut"
                . "<br>" . "<br>"
                . "http://localhost:8080/";

        // Proses
        elseif ($pengaduan['status'] == "Pengaduan Sedang Diproses") :
            $message =
                "<h1>Status Pengaduan</h1><h3>Halo, " . "<strong><i>" . $nama . "</i></strong></h3>"
                . "<br>"
                . "Kode Pengaduan Anda :"
                . "<br>"
                . "<strong><i>" . $kode . "</i></strong>"
                . "<br>" . "<br>"
                . "Status Pengaduan Anda Saat Ini adalah : "
                . "<br>"
                . "<strong>" . $status . "</strong>"
                . "<br>" . "<br>"
                . "Silahkan Kunjungi Website SIPLAKOM Untuk Informasi Lebih Lanjut"
                . "<br>" . "<br>"
                . "http://localhost:8080/";

        // Ditolak
        elseif ($pengaduan['status'] == "Pengaduan Ditolak") :
            $message =
                "<h1>Status Pengaduan</h1><h3>Halo, " . "<strong><i>" . $nama . "</i></strong></h3>"
                . "<br>"
                . "Kode Pengaduan Anda :"
                . "<br>"
                . "<strong><i>" . $kode . "</i></strong>"
                . "<br>" . "<br>"
                . "Status Pengaduan Anda Saat Ini adalah : "
                . "<br>"
                . "<strong><i>" . $status . "</i></strong>"
                . "<br>"      . "<br>"
                . "Keterangan Petugas : "
                . "<br>"
                . "<strong><i>" . $keterangan . "</i></strong>"
                . "<br>"    . "<br>"
                . "Silahkan Kunjungi Website SIPLAKOM Untuk Informasi Lebih Lanjut"
                . "<br>"  . "<br>"
                . "http://localhost:8080/";

        // Selesai
        elseif ($pengaduan['status'] == "Pengaduan Selesai") :
            $message =
                "<h1>Status Pengaduan</h1><h3>Halo, " . "<strong><i>" . $nama . "</i></strong></h3>"
                . "<br>"
                . "Kode Pengaduan Anda :"
                . "<br>"
                . "<strong><i>" . $kode . "</i></strong>"
                . "<br>" . "<br>"
                . "Status Pengaduan Anda Saat Ini adalah : "
                . "<br>"
                . "<strong>" . $status . "</strong>"
                . "<br>" . "<br>"
                . "Keterangan Petugas : "
                . "<br>"
                . "<strong><i>" . $keterangan . "</i></strong>"
                . "<br>"      . "<br>"
                . "Silahkan Kunjungi Website SIPLAKOM Untuk Informasi Lebih Lanjut"
                . "<br>" . "<br>"
                . "http://localhost:8080/";
        endif;


        $this->pemberitahuan($emailuser, $title, $message);

        session()->setFlashdata('pesan', 'Data berhasil diupdate');

        return redirect()->to('/petugas');
    }


    private function pemberitahuan($to, $title, $message)
    {
        $email = \Config\Services::email();

        $email->setFrom('siplakom@gmail.com', 'SIPLAKOM_UNIMA');
        $email->setTo($to);

        // $this->email->attach($attachment);

        $email->setSubject($title);
        $email->setMessage($message);

        if (!$email->send()) {
            return false;
        } else {
            return true;
        }
    }
}
