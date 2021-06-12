<?php

namespace Config;

use CodeIgniter\Validation\CreditCardRules;
use CodeIgniter\Validation\FileRules;
use CodeIgniter\Validation\FormatRules;
use CodeIgniter\Validation\Rules;

class Validation
{
	//--------------------------------------------------------------------
	// Setup
	//--------------------------------------------------------------------

	/**
	 * Stores the classes that contain the
	 * rules that are available.
	 *
	 * @var string[]
	 */
	public $ruleSets = [
		Rules::class,
		FormatRules::class,
		FileRules::class,
		CreditCardRules::class,
	];

	/**
	 * Specifies the views that are used to display the
	 * errors.
	 *
	 * @var array<string, string>
	 */
	public $templates = [
		'list'   => 'CodeIgniter\Validation\Views\list',
		'single' => 'CodeIgniter\Validation\Views\single',
	];

	//--------------------------------------------------------------------
	// Rules
	//--------------------------------------------------------------------
	public $register = [
		'username' => [
			'rules' => 'required|min_length[5]',
		],
		'password' => [
			'rules' => 'required',
		],
		'repeatPassword' => [
			'rules' => 'required|matches[password]',
		]
	];
	public $register_errors = [
		'username' => [
			'required' => 'Username harus diisi',
			'min-length' => '{field} minimal 5 karakter'
		],
		'password' => [
			'required' => 'Password arus diisi',
		],
		'repeatPassword' => [
			'required' => 'Repeat Password Harus diisi',
			'matches' => 'Password tidak sama'
		]
	];

	public $login = [
		'username' => [
			'rules' => 'required|min_length[5]',
		],
		'password' => [
			'rules' => 'required',
		],
	];

	public $transaksi = [
		'id_barang' => [
			'rules' => 'required',
		],
		'id_pembeli' => [
			'rules' => 'required',
		],
		'jumlah' => [
			'rules' => 'required',
		],
		'total_harga' => [
			'rules' => 'required',
		],
		'alamat' => [
			'rules' => 'required',
		],
		'ongkir' => [
			'rules' => 'required',
		],

	];

	public $login_errors = [
		'username' => [
			'required' => 'Username harus diisi',
			'min_length' => '{field} minimal 5 karakter'
		],
		'password' => [
			'required' => 'Password arus diisi',
		],
	];

	public $barang = [
		'nama' => [
			'rules' => 'required|min_length[3]',
		],
		'harga' => [
			'rules' => 'required|is_natural',
		],
		'stok' => [
			'rules' => 'required|is_natural',
		],
		'gambar' => [
			'rules' => 'uploaded[gambar]',
		],
	];

	public $barang_errors = [
		'nama' => [
			'required' => 'Nama harus diisi',
			'min_length' => '{field} minimal 3 karakter'
		],
		'harga' => [
			'required' => 'Harga harus diisi',
			'is_natural' => '{field} tidak boleh selain angka'
		],
		'stok' => [
			'required' => 'Stok harus diisi',
			'min_length' => '{field} tidak bileh selain angka'
		],
		'gambar' => [
			'uploaded' => 'Nama harus diisi',
		]
	];

	public $barang_update = [
		'nama' => [
			'rules' => 'required|min_length[3]',
		],
		'harga' => [
			'rules' => 'required|is_natural',
		],
		'stok' => [
			'rules' => 'required|is_natural',
		],

	];

	public $barang_update_errors = [
		'nama' => [
			'required' => 'Nama harus diisi',
			'min_length' => '{field} minimal 3 karakter'
		],
		'harga' => [
			'required' => 'Harga harus diisi',
			'is_natural' => '{field} tidak boleh selain angka'
		],
		'stok' => [
			'required' => 'Stok harus diisi',
			'min_length' => '{field} tidak bileh selain angka'
		],

	];
}
