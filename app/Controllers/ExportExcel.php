<?php

namespace App\Controllers;

use App\Controllers\BaseController;


use App\Models\PengaduanModel;
use PhpOffice\PhpSpreadsheet\Spreadsheet;

use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

use \PhpOffice\PhpSpreadsheet\Style\Style;
use PhpOffice\PhpSpreadsheet\Style\Borders;
use \PhpOffice\PhpSpreadsheet\Style\Color;

class ExportExcel extends BaseController
{
    protected $pengaduanModel;
    public function __construct()
    {
        $this->pengaduanModel = new PengaduanModel();
    }

    public function index()
    {
        $pengaduan_object = new PengaduanModel();

        $data = $pengaduan_object->orderby('id', 'DESC')->findAll(10); //Limit 10


        return view("export/download-excel", ["data" => $data]);
    }

    function export()
    {

        $pengaduan_object = new PengaduanModel();

        $data = $pengaduan_object->findAll();

        $file_name = 'Data Pengaduan.xlsx';

        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();

        $sheet->getStyle('A:M')->getAlignment()->setHorizontal('center')->setVertical('center');
        $sheet->getStyle('A1:M1')->getAlignment()->setHorizontal('center');
        // $spreadsheet->getActiveSheet()->getRowDimension('10')->setRowHeight(100);

        $spreadsheet->getActiveSheet()->getStyle('A1:L1')->applyFromArray(
            [

                'borders' => [
                    'top' => [
                        'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
                        'color' => ['argb' => '000000'],
                    ],
                ],
                'borders' => [
                    'bottom' => [
                        'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
                        'color' => ['argb' => '000000'],
                    ],
                ],

                'fill' => [
                    'fillType' => \PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID,
                    'startColor' => [
                        'argb' => 'da9694'
                    ],
                ]
                // 'top' => [
                //     'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_DASHDOT,
                //     'color' => [
                //         'rgb' => '808080'
                //     ]
                // ]
                // ],
            ],
        );




        $spreadsheet->getActiveSheet()->getStyle('A:L')->getAlignment()->setWrapText(true);
        // Ator width kolom
        $spreadsheet->getActiveSheet()->getColumnDimension('A')->setWidth(6); //No
        $spreadsheet->getActiveSheet()->getColumnDimension('B')->setWidth(20); //Nama
        $spreadsheet->getActiveSheet()->getColumnDimension('C')->setWidth(15); //Kode
        $spreadsheet->getActiveSheet()->getColumnDimension('D')->setWidth(20); //Nohp
        $spreadsheet->getActiveSheet()->getColumnDimension('E')->setWidth(30); //email
        $spreadsheet->getActiveSheet()->getColumnDimension('F')->setWidth(20); //tujuan
        $spreadsheet->getActiveSheet()->getColumnDimension('G')->setWidth(50); //judul
        $spreadsheet->getActiveSheet()->getColumnDimension('H')->setWidth(50); //isi
        $spreadsheet->getActiveSheet()->getColumnDimension('I')->setWidth(30); //status
        $spreadsheet->getActiveSheet()->getColumnDimension('J')->setWidth(50); //tanggapan
        $spreadsheet->getActiveSheet()->getColumnDimension('K')->setWidth(20); //created
        $spreadsheet->getActiveSheet()->getColumnDimension('L')->setWidth(20); //updated
        // Akhir ator width



        // Tabel
        $sheet->setCellValue('A1', 'No');
        $sheet->setCellValue('B1', 'Nama');
        $sheet->setCellValue('C1', 'Kode Pengaduan.');
        $sheet->setCellValue('D1', 'No Handphone');
        $sheet->setCellValue('E1', 'Email');
        $sheet->setCellValue('F1', 'Tujuan Pengaduan');
        $sheet->setCellValue('G1', 'Judul Pengaduan');
        $sheet->setCellValue('H1', 'Isi Pengaduan');
        $sheet->setCellValue('I1', 'Status');
        $sheet->setCellValue('J1', 'Tanggapan Petugas');
        $sheet->setCellValue('K1', 'Pengaduan Dibuat');
        $sheet->setCellValue('L1', 'Pengaduan Diupdate');

        $count = 2;
        $i = 1;
        foreach ($data as $row) {
            $sheet->setCellValue('A' . $count, $i++);

            $sheet->setCellValue('B' . $count, $row['nama']);

            $sheet->setCellValue('C' . $count, $row['kode']);

            $sheet->setCellValue('D' . $count, $row['no_hp']);
            $sheet->setCellValue('E' . $count, $row['email']);
            $sheet->setCellValue('F' . $count, $row['tujuan_pengaduan']);
            $sheet->setCellValue('G' . $count, $row['judul_laporan']);
            $sheet->setCellValue('H' . $count, $row['isi_laporan']);
            $sheet->setCellValue('I' . $count, $row['status']);
            $sheet->setCellValue('J' . $count, $row['keterangan']);
            $sheet->setCellValue('K' . $count, $row['created_at']);
            $sheet->setCellValue('L' . $count, $row['updated_at']);

            $count++;
        }

        $writer = new Xlsx($spreadsheet);

        $writer->save($file_name);

        header("Content-Type: application/vnd.ms-excel");

        header('Content-Disposition: attachment; filename="' . basename($file_name) . '"');

        header('Expires: 0');

        header('Cache-Control: must-revalidate');

        header('Pragma: public');

        header('Content-Length:' . filesize($file_name));

        flush();

        readfile($file_name);

        exit;
    }

    function masuk()
    {

        $pengaduan_object = new PengaduanModel();

        $data = $pengaduan_object->findAll();

        $file_name = 'Data Pengaduan Masuk.xlsx';

        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();

        $sheet->getStyle('A:M')->getAlignment()->setHorizontal('center')->setVertical('center');
        $sheet->getStyle('A1:M1')->getAlignment()->setHorizontal('center');

        $spreadsheet->getActiveSheet()->getStyle('A1:L1')->applyFromArray(
            [

                'borders' => [
                    'top' => [
                        'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
                        'color' => ['argb' => '000000'],
                    ],
                ],
                'borders' => [
                    'bottom' => [
                        'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
                        'color' => ['argb' => '000000'],
                    ],
                ],

                'fill' => [
                    'fillType' => \PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID,
                    'startColor' => [
                        'argb' => 'da9694'
                    ],
                ]
                // 'top' => [
                //     'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_DASHDOT,
                //     'color' => [
                //         'rgb' => '808080'
                //     ]
                // ]
                // ],
            ],
        );




        $spreadsheet->getActiveSheet()->getStyle('A:L')->getAlignment()->setWrapText(true);
        // Ator width kolom
        $spreadsheet->getActiveSheet()->getColumnDimension('A')->setWidth(6); //No
        $spreadsheet->getActiveSheet()->getColumnDimension('B')->setWidth(20); //Nama
        $spreadsheet->getActiveSheet()->getColumnDimension('C')->setWidth(15); //Kode
        $spreadsheet->getActiveSheet()->getColumnDimension('D')->setWidth(20); //Nohp
        $spreadsheet->getActiveSheet()->getColumnDimension('E')->setWidth(30); //email
        $spreadsheet->getActiveSheet()->getColumnDimension('F')->setWidth(20); //tujuan
        $spreadsheet->getActiveSheet()->getColumnDimension('G')->setWidth(50); //judul
        $spreadsheet->getActiveSheet()->getColumnDimension('H')->setWidth(50); //isi
        $spreadsheet->getActiveSheet()->getColumnDimension('I')->setWidth(30); //status
        $spreadsheet->getActiveSheet()->getColumnDimension('J')->setWidth(50); //tanggapan
        $spreadsheet->getActiveSheet()->getColumnDimension('K')->setWidth(20); //created
        $spreadsheet->getActiveSheet()->getColumnDimension('L')->setWidth(20); //updated
        // Akhir ator width



        // Tabel
        $sheet->setCellValue('A1', 'No');
        $sheet->setCellValue('B1', 'Nama');
        $sheet->setCellValue('C1', 'Kode Pengaduan.');
        $sheet->setCellValue('D1', 'No Handphone');
        $sheet->setCellValue('E1', 'Email');
        $sheet->setCellValue('F1', 'Tujuan Pengaduan');
        $sheet->setCellValue('G1', 'Judul Pengaduan');
        $sheet->setCellValue('H1', 'Isi Pengaduan');
        $sheet->setCellValue('I1', 'Status');
        $sheet->setCellValue('J1', 'Tanggapan Petugas');
        $sheet->setCellValue('K1', 'Pengaduan Dibuat');
        $sheet->setCellValue('L1', 'Pengaduan Diupdate');


        $count = 2;
        $i = 1;
        foreach ($data as $row) {
            if ($row['status'] == 'Pengaduan Sedang Diverifikasi') :
                $sheet->setCellValue('A' . $count, $i++);

                $sheet->setCellValue('B' . $count, $row['nama']);

                $sheet->setCellValue('C' . $count, $row['kode']);

                $sheet->setCellValue('D' . $count, $row['no_hp']);
                $sheet->setCellValue('E' . $count, $row['email']);
                $sheet->setCellValue('F' . $count, $row['tujuan_pengaduan']);
                $sheet->setCellValue('G' . $count, $row['judul_laporan']);
                $sheet->setCellValue('H' . $count, $row['isi_laporan']);
                $sheet->setCellValue('I' . $count, $row['status']);
                $sheet->setCellValue('J' . $count, $row['keterangan']);
                $sheet->setCellValue('K' . $count, $row['created_at']);
                $sheet->setCellValue('L' . $count, $row['updated_at']);

                $count++;
            endif;
        }

        $writer = new Xlsx($spreadsheet);

        $writer->save($file_name);

        header("Content-Type: application/vnd.ms-excel");

        header('Content-Disposition: attachment; filename="' . basename($file_name) . '"');

        header('Expires: 0');

        header('Cache-Control: must-revalidate');

        header('Pragma: public');

        header('Content-Length:' . filesize($file_name));

        flush();

        readfile($file_name);

        exit;
    }


    function proses()
    {

        $pengaduan_object = new PengaduanModel();

        $data = $pengaduan_object->findAll();

        $file_name = 'Data Pengaduan Diproses.xlsx';

        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();

        $sheet->getStyle('A:M')->getAlignment()->setHorizontal('center')->setVertical('center');
        $sheet->getStyle('A1:M1')->getAlignment()->setHorizontal('center');

        $spreadsheet->getActiveSheet()->getStyle('A1:L1')->applyFromArray(
            [

                'borders' => [
                    'top' => [
                        'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
                        'color' => ['argb' => '000000'],
                    ],
                ],
                'borders' => [
                    'bottom' => [
                        'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
                        'color' => ['argb' => '000000'],
                    ],
                ],

                'fill' => [
                    'fillType' => \PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID,
                    'startColor' => [
                        'argb' => 'da9694'
                    ],
                ]
                // 'top' => [
                //     'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_DASHDOT,
                //     'color' => [
                //         'rgb' => '808080'
                //     ]
                // ]
                // ],
            ],
        );




        $spreadsheet->getActiveSheet()->getStyle('A:L')->getAlignment()->setWrapText(true);
        // Ator width kolom
        $spreadsheet->getActiveSheet()->getColumnDimension('A')->setWidth(6); //No
        $spreadsheet->getActiveSheet()->getColumnDimension('B')->setWidth(20); //Nama
        $spreadsheet->getActiveSheet()->getColumnDimension('C')->setWidth(15); //Kode
        $spreadsheet->getActiveSheet()->getColumnDimension('D')->setWidth(20); //Nohp
        $spreadsheet->getActiveSheet()->getColumnDimension('E')->setWidth(30); //email
        $spreadsheet->getActiveSheet()->getColumnDimension('F')->setWidth(20); //tujuan
        $spreadsheet->getActiveSheet()->getColumnDimension('G')->setWidth(50); //judul
        $spreadsheet->getActiveSheet()->getColumnDimension('H')->setWidth(50); //isi
        $spreadsheet->getActiveSheet()->getColumnDimension('I')->setWidth(30); //status
        $spreadsheet->getActiveSheet()->getColumnDimension('J')->setWidth(50); //tanggapan
        $spreadsheet->getActiveSheet()->getColumnDimension('K')->setWidth(20); //created
        $spreadsheet->getActiveSheet()->getColumnDimension('L')->setWidth(20); //updated
        // Akhir ator width



        // Tabel
        $sheet->setCellValue('A1', 'No');
        $sheet->setCellValue('B1', 'Nama');
        $sheet->setCellValue('C1', 'Kode Pengaduan.');
        $sheet->setCellValue('D1', 'No Handphone');
        $sheet->setCellValue('E1', 'Email');
        $sheet->setCellValue('F1', 'Tujuan Pengaduan');
        $sheet->setCellValue('G1', 'Judul Pengaduan');
        $sheet->setCellValue('H1', 'Isi Pengaduan');
        $sheet->setCellValue('I1', 'Status');
        $sheet->setCellValue('J1', 'Tanggapan Petugas');
        $sheet->setCellValue('K1', 'Pengaduan Dibuat');
        $sheet->setCellValue('L1', 'Pengaduan Diupdate');


        $count = 2;
        $i = 1;
        foreach ($data as $row) {
            if ($row['status'] == 'Pengaduan Sedang Diproses') :
                $sheet->setCellValue('A' . $count, $i++);

                $sheet->setCellValue('B' . $count, $row['nama']);

                $sheet->setCellValue('C' . $count, $row['kode']);

                $sheet->setCellValue('D' . $count, $row['no_hp']);
                $sheet->setCellValue('E' . $count, $row['email']);
                $sheet->setCellValue('F' . $count, $row['tujuan_pengaduan']);
                $sheet->setCellValue('G' . $count, $row['judul_laporan']);
                $sheet->setCellValue('H' . $count, $row['isi_laporan']);
                $sheet->setCellValue('I' . $count, $row['status']);
                $sheet->setCellValue('J' . $count, $row['keterangan']);
                $sheet->setCellValue('K' . $count, $row['created_at']);
                $sheet->setCellValue('L' . $count, $row['updated_at']);

                $count++;
            endif;
        }

        $writer = new Xlsx($spreadsheet);

        $writer->save($file_name);

        header("Content-Type: application/vnd.ms-excel");

        header('Content-Disposition: attachment; filename="' . basename($file_name) . '"');

        header('Expires: 0');

        header('Cache-Control: must-revalidate');

        header('Pragma: public');

        header('Content-Length:' . filesize($file_name));

        flush();

        readfile($file_name);

        exit;
    }

    function tolak()
    {

        $pengaduan_object = new PengaduanModel();

        $data = $pengaduan_object->findAll();

        $file_name = 'Data Pengaduan Ditolak.xlsx';

        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();

        $sheet->getStyle('A:M')->getAlignment()->setHorizontal('center')->setVertical('center');
        $sheet->getStyle('A1:M1')->getAlignment()->setHorizontal('center');

        $spreadsheet->getActiveSheet()->getStyle('A1:L1')->applyFromArray(
            [

                'borders' => [
                    'top' => [
                        'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
                        'color' => ['argb' => '000000'],
                    ],
                ],
                'borders' => [
                    'bottom' => [
                        'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
                        'color' => ['argb' => '000000'],
                    ],
                ],

                'fill' => [
                    'fillType' => \PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID,
                    'startColor' => [
                        'argb' => 'da9694'
                    ],
                ]
                // 'top' => [
                //     'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_DASHDOT,
                //     'color' => [
                //         'rgb' => '808080'
                //     ]
                // ]
                // ],
            ],
        );




        $spreadsheet->getActiveSheet()->getStyle('A:L')->getAlignment()->setWrapText(true);
        // Ator width kolom
        $spreadsheet->getActiveSheet()->getColumnDimension('A')->setWidth(6); //No
        $spreadsheet->getActiveSheet()->getColumnDimension('B')->setWidth(20); //Nama
        $spreadsheet->getActiveSheet()->getColumnDimension('C')->setWidth(15); //Kode
        $spreadsheet->getActiveSheet()->getColumnDimension('D')->setWidth(20); //Nohp
        $spreadsheet->getActiveSheet()->getColumnDimension('E')->setWidth(30); //email
        $spreadsheet->getActiveSheet()->getColumnDimension('F')->setWidth(20); //tujuan
        $spreadsheet->getActiveSheet()->getColumnDimension('G')->setWidth(50); //judul
        $spreadsheet->getActiveSheet()->getColumnDimension('H')->setWidth(50); //isi
        $spreadsheet->getActiveSheet()->getColumnDimension('I')->setWidth(30); //status
        $spreadsheet->getActiveSheet()->getColumnDimension('J')->setWidth(50); //tanggapan
        $spreadsheet->getActiveSheet()->getColumnDimension('K')->setWidth(20); //created
        $spreadsheet->getActiveSheet()->getColumnDimension('L')->setWidth(20); //updated
        // Akhir ator width



        // Tabel
        $sheet->setCellValue('A1', 'No');
        $sheet->setCellValue('B1', 'Nama');
        $sheet->setCellValue('C1', 'Kode Pengaduan.');
        $sheet->setCellValue('D1', 'No Handphone');
        $sheet->setCellValue('E1', 'Email');
        $sheet->setCellValue('F1', 'Tujuan Pengaduan');
        $sheet->setCellValue('G1', 'Judul Pengaduan');
        $sheet->setCellValue('H1', 'Isi Pengaduan');
        $sheet->setCellValue('I1', 'Status');
        $sheet->setCellValue('J1', 'Tanggapan Petugas');
        $sheet->setCellValue('K1', 'Pengaduan Dibuat');
        $sheet->setCellValue('L1', 'Pengaduan Diupdate');


        $count = 2;
        $i = 1;
        foreach ($data as $row) {
            if ($row['status'] == 'Pengaduan Ditolak') :
                $sheet->setCellValue('A' . $count, $i++);

                $sheet->setCellValue('B' . $count, $row['nama']);

                $sheet->setCellValue('C' . $count, $row['kode']);

                $sheet->setCellValue('D' . $count, $row['no_hp']);
                $sheet->setCellValue('E' . $count, $row['email']);
                $sheet->setCellValue('F' . $count, $row['tujuan_pengaduan']);
                $sheet->setCellValue('G' . $count, $row['judul_laporan']);
                $sheet->setCellValue('H' . $count, $row['isi_laporan']);
                $sheet->setCellValue('I' . $count, $row['status']);
                $sheet->setCellValue('J' . $count, $row['keterangan']);
                $sheet->setCellValue('K' . $count, $row['created_at']);
                $sheet->setCellValue('L' . $count, $row['updated_at']);

                $count++;
            endif;
        }

        $writer = new Xlsx($spreadsheet);

        $writer->save($file_name);

        header("Content-Type: application/vnd.ms-excel");

        header('Content-Disposition: attachment; filename="' . basename($file_name) . '"');

        header('Expires: 0');

        header('Cache-Control: must-revalidate');

        header('Pragma: public');

        header('Content-Length:' . filesize($file_name));

        flush();

        readfile($file_name);

        exit;
    }

    function selesai()
    {

        $pengaduan_object = new PengaduanModel();

        $data = $pengaduan_object->findAll();

        $file_name = 'Data Pengaduan Selesai.xlsx';

        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();

        $sheet->getStyle('A:M')->getAlignment()->setHorizontal('center')->setVertical('center');
        $sheet->getStyle('A1:M1')->getAlignment()->setHorizontal('center');

        $spreadsheet->getActiveSheet()->getStyle('A1:L1')->applyFromArray(
            [

                'borders' => [
                    'top' => [
                        'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
                        'color' => ['argb' => '000000'],
                    ],
                ],
                'borders' => [
                    'bottom' => [
                        'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
                        'color' => ['argb' => '000000'],
                    ],
                ],

                'fill' => [
                    'fillType' => \PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID,
                    'startColor' => [
                        'argb' => 'da9694'
                    ],
                ]
                // 'top' => [
                //     'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_DASHDOT,
                //     'color' => [
                //         'rgb' => '808080'
                //     ]
                // ]
                // ],
            ],
        );




        $spreadsheet->getActiveSheet()->getStyle('A:L')->getAlignment()->setWrapText(true);
        // Ator width kolom
        $spreadsheet->getActiveSheet()->getColumnDimension('A')->setWidth(6); //No
        $spreadsheet->getActiveSheet()->getColumnDimension('B')->setWidth(20); //Nama
        $spreadsheet->getActiveSheet()->getColumnDimension('C')->setWidth(15); //Kode
        $spreadsheet->getActiveSheet()->getColumnDimension('D')->setWidth(20); //Nohp
        $spreadsheet->getActiveSheet()->getColumnDimension('E')->setWidth(30); //email
        $spreadsheet->getActiveSheet()->getColumnDimension('F')->setWidth(20); //tujuan
        $spreadsheet->getActiveSheet()->getColumnDimension('G')->setWidth(50); //judul
        $spreadsheet->getActiveSheet()->getColumnDimension('H')->setWidth(50); //isi
        $spreadsheet->getActiveSheet()->getColumnDimension('I')->setWidth(30); //status
        $spreadsheet->getActiveSheet()->getColumnDimension('J')->setWidth(50); //tanggapan
        $spreadsheet->getActiveSheet()->getColumnDimension('K')->setWidth(20); //created
        $spreadsheet->getActiveSheet()->getColumnDimension('L')->setWidth(20); //updated
        // Akhir ator width



        // Tabel
        $sheet->setCellValue('A1', 'No');
        $sheet->setCellValue('B1', 'Nama');
        $sheet->setCellValue('C1', 'Kode Pengaduan.');
        $sheet->setCellValue('D1', 'No Handphone');
        $sheet->setCellValue('E1', 'Email');
        $sheet->setCellValue('F1', 'Tujuan Pengaduan');
        $sheet->setCellValue('G1', 'Judul Pengaduan');
        $sheet->setCellValue('H1', 'Isi Pengaduan');
        $sheet->setCellValue('I1', 'Status');
        $sheet->setCellValue('J1', 'Tanggapan Petugas');
        $sheet->setCellValue('K1', 'Pengaduan Dibuat');
        $sheet->setCellValue('L1', 'Pengaduan Diupdate');


        $count = 2;
        $i = 1;
        foreach ($data as $row) {
            if ($row['status'] == 'Pengaduan Selesai') :
                $sheet->setCellValue('A' . $count, $i++);

                $sheet->setCellValue('B' . $count, $row['nama']);

                $sheet->setCellValue('C' . $count, $row['kode']);

                $sheet->setCellValue('D' . $count, $row['no_hp']);
                $sheet->setCellValue('E' . $count, $row['email']);
                $sheet->setCellValue('F' . $count, $row['tujuan_pengaduan']);
                $sheet->setCellValue('G' . $count, $row['judul_laporan']);
                $sheet->setCellValue('H' . $count, $row['isi_laporan']);
                $sheet->setCellValue('I' . $count, $row['status']);
                $sheet->setCellValue('J' . $count, $row['keterangan']);
                $sheet->setCellValue('K' . $count, $row['created_at']);
                $sheet->setCellValue('L' . $count, $row['updated_at']);

                $count++;
            endif;
        }

        $writer = new Xlsx($spreadsheet);

        $writer->save($file_name);

        header("Content-Type: application/vnd.ms-excel");

        header('Content-Disposition: attachment; filename="' . basename($file_name) . '"');

        header('Expires: 0');

        header('Cache-Control: must-revalidate');

        header('Pragma: public');

        header('Content-Length:' . filesize($file_name));

        flush();

        readfile($file_name);

        exit;
    }
}
