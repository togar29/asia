<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class DetailLowongan extends Migration
{
	public function up()
	{
		$this->forge->addField(
			[
				'id'               => ['type' => 'int', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true],
				'lowonganid'					 => ['type' => 'int', 'constraint' => 11, 'unsigned' => true],
				'kriteria'				 => ['type' => 'varchar', 'constraint' => 255, 'null' => true],
				'keterangan'				 => ['type' => 'varchar', 'constraint' => 255, 'null' => true],

			]
		);
		$this->forge->addKey('id', true);
		$this->forge->addForeignKey('lowonganid', 'listlowongan', 'id', '', 'CASCADE');
		$this->forge->createTable('kriterialowongan', true);
	}

	public function down()
	{
		//
	}
}
