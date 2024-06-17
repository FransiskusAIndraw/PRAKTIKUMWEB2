<?php
namespace App\Controllers;
use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\UserModel;
class LoginController extends BaseController
{
    public function index()
    {
        return view('auth/login');
    }
    public function login()
    {
        $model = new UserModel();
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        log_message('debug', 'Email: ' . $email);
        log_message('debug', 'Password: ' . $password);

        if (is_string($email) && is_string($password)) {
            $user = $model->where('email', $email)->first();

            if ($user) {
                if (password_verify($password, $user['password'])) {
                    session()->set('isLoggedIn', true);
                    return redirect()->to('/dashboard');
                } else {
                    return redirect()->back()->with('error', 'Password salah.');
                }
            } else {
                return redirect()->back()->with('error', 'Email tidak ditemukan.');
            }
        } else {
            return redirect()->back()->with('error', 'Email dan password harus diisi.');
        }
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
    }
}

