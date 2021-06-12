<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Transaksialteralamat extends Migration
{
	public function up()
	{
		$fields = [
			'alamat' => [
				'type' => 'TEXT'
			],
			'ongkir' => [
				'type' => 'INT'
			],
			'status' => [
				'type' => 'INT',
				'constraint' => 11
			],
		];

		$this->forge->addColumn('transaksi', $fields);
	}

	public function down()
	{
		$this->forge->dropColumn('transaksi', ['alamat', 'ongkir', 'status']);
	}
}
