<?php

namespace App\Models;

use CodeIgniter\Model;

class Barang extends Model
{
	protected $table                = 'barang';
	protected $primaryKey           = 'id';
	protected $allowedFields        = [
		'nama', 'harga', 'stok', 'gambar', 'created_by', 'created_date', 'updated_date', 'updated_by'
	];
	protected $returnType = 'App\Entities\Barang';
	protected $useTimeStamps = false;
}
