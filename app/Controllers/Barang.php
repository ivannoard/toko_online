<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Barang extends BaseController
{
	public function __construct()
	{
		helper('form');
		$this->validation = \Config\Services::validation();
		$this->session = session();
	}

	public function index()
	{
		$model = $model = new \App\Models\Barang();
		$barangs = $model->findAll();
		return view('barang/index', [
			'barangs' => $barangs
		]);
	}

	public function view()
	{
		$id = $this->request->uri->getSegment(3);
		$model = new \App\Models\Barang();
		$barang = $model->find($id);
		return view('barang/view', [
			'barang' => $barang
		]);
	}

	public function create()
	{
		if ($this->request->getPost()) {
			// Jika ada data yang dipost
			$data = $this->request->getPost();
			$this->validation->run($data, 'barang');
			$errors = $this->validation->getErrors();
			if (!$errors) {
				// Simpan data
				$model = new \App\Models\Barang();
				$barang = new \App\Entities\Barang();
				$barang->fill($data);
				// Menimpa
				$barang->gambar = $this->request->getFile('gambar');
				$barang->created_by = $this->session->get('id');
				$barang->created_date = date('Y-m-d H:i:s');

				$model->save($barang);

				$id = $model->insertId();
				$segments = ['barang', 'view', $id];
				return redirect()->to(site_url($segments));
			}
		}
		return view('barang/create');
	}

	public function update()
	{
		$id = $this->request->uri->getSegment(3);
		$model = new \App\Models\Barang();
		$barang = $model->find($id);

		// Jika ada data yang dipost
		if ($this->request->getPost()) {
			$data = $this->request->getPost();
			$this->validation->run($data, 'barang_update');
			$errors = $this->validation->getErrors();
			if (!$errors) {
				$b = new \App\Entities\Barang();
				$b->id = $id;
				$b->fill($data);

				if ($this->request->getFile('gambar')->isValid()) {
					$b->gambar = $this->request->getFile('gambar');
				}
				$b->updated_by = $this->request->getPost('id');
				$b->updated_date = date('Y-m-h H:i:s');

				$model->save($b);

				$segments = ['barang', 'view', $id];
				return redirect()->to(site_url($segments));
			}
		}

		return view('barang/update', [
			'barang' => $barang
		]);
	}

	public function delete()
	{
		$id = $this->request->uri->getSegment(3);
		$model = new \App\Models\Barang();
		$delete = $model->delete($id);

		return redirect()->to(site_url('barang/index'));
	}
}
