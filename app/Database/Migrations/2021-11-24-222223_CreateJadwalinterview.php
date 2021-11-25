<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateJadwalinterview extends Migration
{
	public function up()
	{
		$this->forge->addField(
			[
				'id'           => ['type' => 'int', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true],
				'namaPelamar'	 => ['type' => 'varchar', 'constraint' => 255, 'null' => false],
				'tanggal'			 => ['type' => 'date', 'null' => false],
				'waktu'				 => ['type' => 'time', 'null' => true],
			]
		);
		$this->forge->addKey('id', true);
		$this->forge->createTable('jadwalinterview', true);
	}

	public function down()
	{
		//
	}
}
