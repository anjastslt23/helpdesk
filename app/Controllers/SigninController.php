<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Validation\Rules;

class SigninController extends BaseController
{
    public function index()
    {
        $data['title'] = 'Helpdesk | Masuk Ke Sistem';
        return view('welcome_message', $data);
    }

    // Penanganan proses masuk/login
    public function loginRules()
    {
        $validation = \Config\Services::validation();
        $validation->setRules([
            'email' => [
                'rules' => 'required|valid_email',
                'errors' => [
                    'required' => '{field} tidak boleh kosong',
                    'valid_email' => 'Masukkan email yang valid',
                ],
            ],
            'password' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} tidak boleh kosong',
                ],
            ],
        ]);

        if (!$validation->withRequest($this->request)->run()) {
            // Validasi tidak berhasil, kembalikan ke halaman login dengan pesan error
            return redirect()->back()->withInput()->with('validation', $validation);
        }

        // Validasi berhasil, lanjutkan dengan proses login
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');
        $data = $this->adminModel->where('email_admin', $email)->first();

        if ($data) {
            if (password_verify($password, $data['kata_sandi'])) {
                // Login berhasil, buat data sesi
                session()->set([
                    'id_admin' => $data['id_admin'],
                    'email_admin' => $data['email_admin'],
                    'nip_admin' => $data['nip_admin'],
                    'level_akun' => $data['level_akun'],
                    'instansi' => $data['instansi_admin'],
                    'nama_admin' => $data['nama_admin'],
                    'alamat_admin' => $data['alamat_admin'],
                    'Authorized' => true
                ]);

                return redirect()->to('admin/dashboard')->with('success', 'Login berhasil');
            } else {
                // Kata sandi salah
                return redirect()->back()->withInput()->with('errors', 'Kata sandi salah');
            }
        } else {
            // Email tidak ditemukan
            return redirect()->back()->withInput()->with('errors', 'Email tidak ditemukan');
        }
    }

    // Penanganan lupa kata sandi
    public function lupaPassword()
    {
        $data['title'] = 'Helpdesk | Lupa Kata Sandi';
        return view('lupa_password', $data);
    }
}
