<?php
namespace App\Controllers;
use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\BukuModel;
class BukuController extends BaseController
{
    public function index()
    {
        $model = new BukuModel();
        $data['buku'] = $model->findAll();
        return view('buku/index', $data);
    }
    public function create()
    {
        return view('buku/create');
    }
    public function store()
    {
        $model = new BukuModel();
        $data = $this->request->getPost();
        if ($model->insert($data)) {
            return redirect()->to('/buku');
        } else {
            return redirect()->back()->withInput()->with('errors', $model->errors());
        }
    }
    public function edit($id)
    {
        $model = new BukuModel();
        $data['buku'] = $model->find($id);
        return view('buku/edit', $data);
    }
    public function update($id)
    {
        $model = new BukuModel();
        $data = $this->request->getPost();
        if ($model->update($id, $data)) {
            return redirect()->to('/buku');
        } else {
            return redirect()->back()->withInput()->with('errors', $model->errors());
        }
    }
    public function delete($id)
    {
        $model = new BukuModel();
        $model->delete($id);
        return redirect()->to('/buku');
    }
}
