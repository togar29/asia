<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Listlowongan extends Migration
{
	public function up()
	{
		$this->forge->addField(
			[
				'id'               => ['type' => 'int', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true],
				'namalowongan'		 =>  ['type' => 'varchar', 'constraint' => 255, 'null' => true],
				'devisi'		 			 =>  ['type' => 'varchar', 'constraint' => 255, 'null' => true],
				'keterangan'			=> ['type' => 'varchar', 'constraint' => 255, 'null' => true],
			]
		);
		$this->forge->addKey('id', true);
		$this->forge->createTable('listlowongan', true);
	}

	public function down()
	{
		//
	}
}
