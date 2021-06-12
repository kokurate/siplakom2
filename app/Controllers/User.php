<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PengaduanModel;

$db      = \Config\Database::connect();
$builder = $db->table('pengaduan');



helper('text');

class User extends BaseController
{
	protected $pengaduanModel;
	public function __construct()
	{
		$this->pengaduanModel = new PengaduanModel();
	}

	public function index()
	{
		$data = [
			'tittle' => 'SIPLAKOM | Buat Pengaduan',
			'pengaduan' => $this->pengaduanModel->getPengaduan()
		];
		return view('user/index', $data);
	}

	public function cari()
	{
		// $jmlPaginasi =5;
		// $current = $this->get
		$pager = \Config\Services::pager();
		$current = $this->request->getVar('page_pengaduan') ? $this->request->getVar('page_pengaduan') : 1;

		// Cari data berdasarkan keyword yang nnti mo bking kode
		$keyword = $this->request->getVar('keyword');
		if ($keyword) {
			$cari =  $this->pengaduanModel->search($keyword);
		} else {
			// $cari = $this->pengaduanModel->getNull();
			$cari = $this->pengaduanModel->search('-');
		}

		//folder custom paginasi eps 14 menit 14.00
		$data = [
			'tittle' => 'SIPLAKOM | Cari Pengaduan',
			// 'pengaduan' => $this->pengaduanModel->findAll(),
			'pengaduan' => $cari->paginate(10, 'pengaduan'), //paginasi 10 data, nama tabel
			'pager' => $this->pengaduanModel->pager, //method untuk menampilkan link paginasi,
			'current' => $current


		];
		return view('user/cari', $data);
	}

	public function about()
	{
		$data = [
			'tittle' => 'Tentang SIPLAKOM'
		];
		return view('user/about', $data);
	}

	public function contact()
	{
		$data = [
			'tittle' => 'Hubungi Kami'
		];
		return view('user/contact', $data);
	}

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

		return view('user/detail', $data);
	}

	public function create()
	{
		// session();
		$data = [
			'tittle' => 'Tambah Data Pengaduan',
			'validation' => \Config\Services::validation(),

		];
		return view('user/buat_pengaduan', $data);
	}

	public function save()
	{
		$data = [
			'pengaduan' => $this->pengaduanModel->getPengaduan()
		];

		// Validasi Input
		if (!$this->validate([
			'nama' => [
				'rules' => 'required',
				'errors' => [
					'required' => '{field} pengadu harus diisi'
				]
			],

			'no_hp' => [
				'rules' => 'required|numeric|min_length[11]|max_length[13]',
				'errors' => [
					'required'	=> '{field} harus diisi',
					'numeric' => '{field} harus angka',
					'min_length' => 'No Handphone Harus Lebih Dari 11 Karakter',
					'max_length' => 'No Handphone Tidak Boleh Lebih Dari 13 Karakter'
				]
			],

			'email' => [
				'rules' => 'required|valid_email',
				'errors' => [
					'required'	=> '{field} harus diisi',
					'valid_email' => 'format {field} tidak valid'
				]
			],

			'judul_laporan' => [
				'rules' => 'required|max_length[100]',
				'errors' => [
					'required'	=> '{field} harus diisi',
					'max_length' => '{field} tidak boleh lebih dari 100 karakter'
				]
			],


			'isi_laporan' => [
				'rules' => 'required',
				'errors' => [
					'required'	=> '{field} harus diisi',
					'min_length' => '{field} harus lebih dari 100 karakter'
				]
			],

			"foto" => [
				// rules deleted uploaded[foto]|
				// 'uploaded' => 'Pilih Gambar Terlebih Dahulu',
				'rules' => 'max_size[foto,2048]|is_image[foto]|mime_in[foto,image/jpg ,image/jpeg,image/png]',
				'errors' => [

					'max_size' => 'Ukuran gambar tidak boleh lebih dari 2MB',
					'is_image' => 'Yang anda pilih bukan gambar',
					'mime_in' => 'Yang anda pilih bukan gambar'
				]
			],

			"foto2" => [
				// rules deleted uploaded[foto]|
				// 'uploaded' => 'Pilih Gambar Terlebih Dahulu',
				'rules' => 'max_size[foto2,2048]|is_image[foto2]|mime_in[foto2,image/jpg ,image/jpeg,image/png]',
				'errors' => [

					'max_size' => 'Ukuran gambar tidak boleh lebih dari 2MB',
					'is_image' => 'Yang anda pilih bukan gambar',
					'mime_in' => 'Yang anda pilih bukan gambar'
				]
			],
			"foto3" => [
				// rules deleted uploaded[foto]|
				// 'uploaded' => 'Pilih Gambar Terlebih Dahulu',
				'rules' => 'max_size[foto3,2048]|is_image[foto3]|mime_in[foto3,image/jpg ,image/jpeg,image/png]',
				'errors' => [

					'max_size' => 'Ukuran gambar tidak boleh lebih dari 2MB',
					'is_image' => 'Yang anda pilih bukan gambar',
					'mime_in' => 'Yang anda pilih bukan gambar'
				]
			],

			// 'tujuan_pengaduan' => [
			// 	'rules' => 'required',
			// 	'errors' => [
			// 		'required' => 'Tujuan Pengaduan harus diisi'
			// 	]
			// ]



			// 'noinduk' => 'required|numeric',
			// 'email' => 'required|valid_email',
			// 'judul_laporan' => 'required|max_length[100]',
			// 'isi_laporan' => 'required|min_length[100]',
			// 'foto' => 'required'
		])) {
			// $validation = \Config\Services::validation();
			// return redirect()->to('/user/create')->withInput()->with('validation', $validation);
			return redirect()->to('/user/create')->withInput();
		}

		// ambil gambar 1 dulu 
		$fileFoto = $this->request->getFile('foto');

		// Cek apakah tidak ada gambar yang diupload
		if ($fileFoto->getError() == 4) {
			$namaFoto = 'default.png';
		} else {

			// Generate nama foto random
			$namaFoto = $fileFoto->getRandomName();

			// pindahkan file ke folder img
			$fileFoto->move('img', $namaFoto);

			// ambil nama file img (bagini so boleh sih karena dia auto name biar nama sama)
			// $namaFoto = $fileFoto->getName();
		}

		// =======================================================================
		// sebelum insert
		// ambil gambar 2 dulu 
		$fileFoto2 = $this->request->getFile('foto2');
		if ($fileFoto2->getError() == 4) {
			$namaFoto2 = '';
		} else {

			// Generate nama foto random
			$namaFoto2 = $fileFoto2->getRandomName();

			// pindahkan file ke folder img
			$fileFoto2->move('img', $namaFoto2);

			// ambil nama file img (bagini so boleh sih karena dia auto name biar nama sama)
			// $namaFoto = $fileFoto->getName();
		}
		// =========================================================================
		// Ambe gambar 3
		$fileFoto3 = $this->request->getFile('foto3');
		if ($fileFoto3->getError() == 4) {
			$namaFoto3 = '';
		} else {

			// Generate nama foto random
			$namaFoto3 = $fileFoto3->getRandomName();

			// pindahkan file ke folder img
			$fileFoto3->move('img', $namaFoto3);
		}

		$status = $this->request->getVar('status');
		$nama = $this->request->getVar('nama');
		$emailuser = $this->request->getVar('email');
		$keterangan = $this->request->getVar('keterangan');
		$title = 'Notifikasi SIPLAKOM';
		$kode = $this->request->getVar('kode');

		// Ambe samua data yang ada input trus insert ka database
		$this->pengaduanModel->save(
			[
				'nama' => $this->request->getVar('nama'),
				'kode' => $this->request->getVar('kode'),
				'no_hp' => $this->request->getVar('no_hp'),
				'email' => $this->request->getVar('email'),
				'judul_laporan' => $this->request->getVar('judul_laporan'),
				'isi_laporan' => $this->request->getVar('isi_laporan'),
				'foto' => $namaFoto,
				'foto2' => $namaFoto2,
				'foto3' => $namaFoto3,
				'status' => $this->request->getVar('status'),
				'tujuan_pengaduan' => $this->request->getVar('tujuan_pengaduan'),

			]
		);
		$message =
			"<h1>Pengaduan Berhasil Dibuat</h1><h2>Halo, " . "<strong><i>" . $nama . "</i></strong></h2>"
			. "<br>"
			. "<h2>Kode Pengaduan Anda Adalah</h2>"
			. "<h2><strong><i>" . $kode . "</i></strong><h2>"
			. "<br>"
			. "Gunakan Kode Tersebut Untuk Mengecek Detail Pengaduan Yang Diajukan"
			. "<br>" . "<br>"
			. "Silahkan Kunjungi Website SIPLAKOM Untuk Informasi Lebih Lanjut"
			. "<br>"
			. "http://localhost:8080/";

		$this->pemberitahuan($emailuser, $title, $message);

		session()->setFlashdata('pesan',  'Silahkan Cek Email Anda');

		return redirect()->to('/user/cari');
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
