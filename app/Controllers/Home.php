<?php

namespace App\Controllers;

use App\Models\PengaduanModel;

$db      = \Config\Database::connect();
$builder = $db->table('pengaduan');


class Home extends BaseController
{
	protected $pengaduanModel;
	public function __construct()
	{
		$this->pengaduanModel = new PengaduanModel();
	}

	public function index()
	{
		$db      = \Config\Database::connect();
		$builder = $db->table('pengaduan');

		$data = [
			'tittle' => 'Home',
			'pengaduan' => $this->pengaduanModel->orderby('id', 'DESC')->findAll(5),


			// Count Result
			'all' => $db->query('SELECT id FROM Pengaduan'),
			'masuk' => $db->query('SELECT * FROM Pengaduan Where status="Pengaduan Sedang Diverifikasi" '),
			'proses' => $db->query('SELECT * FROM Pengaduan Where status="Pengaduan Sedang Diproses" '),
			'selesai' => $db->query('SELECT * FROM Pengaduan Where status="Pengaduan Selesai" '),
			'tolak' => $db->query('SELECT * FROM Pengaduan Where status="Pengaduan Ditolak" '),


		];
		return view('home', $data);
	}
}
