<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Transaksialterfk extends Migration
{
	public function up()
	{

		$this->forge->dropForeignKey('transaksi', 'transaksi_id_barang_foreign');
		$this->forge->dropForeignKey('transaksi', 'transaksi_id_pembeli_foreign');

		$this->forge->addColumn('transaksi', [
			'CONSTRAINT transaksi_id_pembeli_foreign FOREIGN KEY(id_pembeli) REFERENCES user(id) ON DELETE CASCADE ON UPDATE CASCADE',
		]);

		$this->forge->addColumn('transaksi', [
			'CONSTRAINT transaksi_id_barang_foreign FOREIGN KEY(id_barang) REFERENCES barang(id) ON DELETE CASCADE ON UPDATE CASCADE',
		]);
	}
	public function down()
	{
		$this->forge->addColumn('transaksi', [
			'CONSTRAINT transaksi_id_pembeli_foreign FOREIGN KEY(id_pembeli) REFERENCES user(id)',
		]);

		$this->forge->addColumn('transaksi', [
			'CONSTRAINT transaksi_id_barang_foreign FOREIGN KEY(id_barang) REFERENCES barang(id)',
		]);
	}
}
