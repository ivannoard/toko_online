<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Auth extends BaseController
{
	public function __construct()
	{
		helper('form');
		$this->validation = \Config\Services::validation();
		$this->session = session();
	}
	public function register()
	{
		if ($this->request->getPost()) {
			// LAKUKAN VALIDASI PADA DATA
			$data = $this->request->getPost();
			$validate = $this->validation->run($data, 'register');
			$errors = $this->validation->getErrors();

			// JIKA TIDAK ADA DATA
			if (!$errors) {
				$userModel = new \App\Models\User();
				$user = new \App\Entities\User();
				// Membuat object entity
				$user->username = $this->request->getPost('username');
				$user->password = $this->request->getPost('password');
				$user->created_by = 0;
				$user->created_date = date("Y-m-d H:i:s");

				$userModel->save($user);
				return view('auth/login');
			}
			$this->session->setFlashdata('errors', $errors);
		}
		return view('auth/register');
	}

	public function login()
	{
		if ($this->request->getPost()) {
			$data = $this->request->getPost();
			$validate = $this->validation->run($data, 'login');
			$errors = $this->validation->getErrors();
			if ($errors) {
				return view('auth/login');
			}
			$userModel = new \App\Models\User();
			$username = $this->request->getPost('username');
			$password = $this->request->getPost('password');

			$user = $userModel->where('username', $username)->first();
			if ($user) {
				$salt = $user->salt;
				if ($user->password !== md5($salt . $password)) {
					$this->session->setFlashdata('errors', ['Password salah!']);
				} else {
					$sessionData = [
						'username' => $user->username,
						'id' => $user->id,
						'role' => $user->role,
						'isLogin' => true
					];
					$this->session->set($sessionData);
					return redirect()->to(site_url('home/index'));
				}
			} else {
				$this->session->setFlashdata('errors', ['User tidak ditemukan']);
			}
		}
		return view('auth/login');
	}

	public function logout()
	{
		$this->session->destroy();
		return redirect()->to(site_url('auth/login'));
	}
}
