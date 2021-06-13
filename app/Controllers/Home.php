<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		$model = new \App\Models\Barang();
		$barang = $model->findAll();
		return view('main.php', [
			'barang' => $barang
		]);
	}
}
