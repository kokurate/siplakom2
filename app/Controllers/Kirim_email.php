<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PengaduanModel;

use \PHPMailer\PHPMailer\PHPMailer;
use \PHPMailer\PHPMailer\SMTP;
use \PHPMailer\PHPMailer\Exception;

class Kirim_email extends BaseController
{
    protected $pengaduanModel;

    public function __construct()
    {
        helper(['form']);
        $this->pengaduanModel = new PengaduanModel();
    }

    public function index($id)
    {
        $data = [
            'tittle' => 'Kirim Email',
            'pengaduan' => $this->pengaduanModel->getPengaduan($id)

        ];
        return view('kirim_email', $data);
    }

    public function send($id)
    {
        $to                 = $this->request->getPost('to');
        $subject            = $this->request->getPost('subject');
        $message            = $this->request->getPost('message');

        $mail = new PHPMailer(true);
        try {
            $mail->SMTPDebug = SMTP::DEBUG_SERVER;
            $mail->isSMTP();
            $mail->Host       = 'smtp.googlemail.com';
            $mail->SMTPAuth   = true;
            $mail->Username   = 'siplakom@gmail.com'; // username @gmail
            $mail->Password   = 'SIPLAKOM_UNIMA'; // password 
            $mail->SMTPSecure = 'ssl';
            $mail->Port       = 465;

            $mail->setFrom('siplakom@gmail.com'); // silahkan ganti dengan alamat email Anda
            $mail->addAddress($to);
            $mail->addReplyTo('siplakom@gmail.com'); // silahkan ganti dengan alamat email Anda
            // Content
            $mail->isHTML(true);
            $mail->Subject = $subject;
            $mail->Body    = $message;

            $mail->send();
            session()->setFlashdata('success', 'Send Email successfully');
            return redirect()->to('/kirim_email/' . $id);
        } catch (Exception $e) {
            session()->setFlashdata('error', "Send Email failed. Error: " . $mail->ErrorInfo);
            return redirect()->to('/kirim_email/' . $id);
        }
    }
}
