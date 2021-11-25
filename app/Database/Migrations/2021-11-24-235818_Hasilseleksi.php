<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Hasilseleksi extends Migration
{
	public function up()
	{
		$this->forge->addField(
			[
				'id'               => ['type' => 'int', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true],
				'userId'					 => ['type' => 'int', 'constraint' => 11, 'unsigned' => true],
				'hasildata'				 => ['type' => 'int', 'constraint' => 11, 'unsigned' => true],
				'hasiltes'		 		 => ['type' => 'int', 'constraint' => 11, 'unsigned' => true],
				'hasilinterview'  =>['type' => 'int', 'constraint' => 11, 'unsigned' => true],
			]
		);
		$this->forge->addKey('id', true);
		$this->forge->addForeignKey('userId', 'users', 'id', '', 'CASCADE');
		$this->forge->createTable('hasilseleksi', true);
	}
	}

	public function down()
	{
		//
	}
}
