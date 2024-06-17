<?php
namespace App\Controllers;
use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\UserModel;
class RegisterController extends BaseController
{
    protected $model;
    public function __construct()
    {
        $this->model = new UserModel();
        $this->helpers = ['form', 'url'];
    }
    public function index()
    {
        $data = [
            'title' => 'Library type shi fr'
        ];
        return view('auth/register', $data);
    }
    public function store()
    {
        $model = new UserModel();
        $data = [
            'username' => $this->request->getPost('username'),
            'email' => $this->request->getPost('email'),
            'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT)
        ];
        if ($this->validate([
            'username' => 'required|min_length[3]|is_unique[user.username]',
            'email' => 'required|valid_email|is_unique[user.email]',
            'password' => 'required|min_length[8]'
        ])) {
            if ($model->insert($data)) {
                return redirect()->to('/login')->with('success', 'Registrasi berhasil.');
            } else {
                return redirect()->back()->withInput()->with('errors', $model->errors());
            }
        } else {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }
    }
}
