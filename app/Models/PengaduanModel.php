<?php

namespace App\Models;

use CodeIgniter\Model;

date_default_timezone_set("Asia/Singapore");

class PengaduanModel extends Model
{

    protected $table = 'pengaduan';
    protected $primarykey = 'id';
    // protected $dateFormat = 'timestamp';
    // protected $returnType ='array';
    protected $useTimestamps = true;
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
    protected $allowedFields = ['nama', 'no_hp', 'email', 'judul_laporan', 'isi_laporan', 'foto', 'keterangan', 'status', 'tujuan_pengaduan', 'kode', 'foto2', 'foto3', 'foto_petugas', 'foto_petugas2', 'foto_petugas3'];

    // Detail pengaduan
    public function getPengaduan($id = false)
    {
        // Kalo dpe id kosong cari samua
        if ($id == false) {
            return $this->findAll();
        }
        // Mar kalo ada dpe id kase tampil
        return $this->where(['id' => $id])->first();
    }

    public function search($keyword)
    {
        // $builder = $this->table('pengaduan');
        // $builder->like('kode', $keyword);
        // return $builder;

        // pake chaining
        return $this->table('pengaduan')->where('kode', $keyword);
    }


    // // foto_petugas
    // public function getFoto_petugas($id = $foto_petugas)
    // {
    //     // Kalo dpe id kosong cari samua
    //     if ($id == false) {
    //         return $this->findAll();
    //     }
    //     // Mar kalo ada dpe id kase tampil
    //     return $this->where([
    //         'id' => $id,
    //         'foto_petugas' => $foto_petugas
    //     ])->first();
    // }


}
