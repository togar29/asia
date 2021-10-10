<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Createjawaban extends Migration
{
	public function up()
	{
		$this->forge->addField(
			[
				'id'               => ['type' => 'int', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true],
				'userId'					 => ['type' => 'int', 'constraint' => 11, 'unsigned' => true],
				'jenisTes'				 => ['type' => 'int', 'constraint' => 11, 'unsigned' => true],
				'jawaban'		 			 => ['type' => 'text', 'null' => true],
				'kunci'						=> ['type' => 'text', 'null' => true],
			]
		);
		$this->forge->addKey('id', true);
		$this->forge->addForeignKey('userId', 'users', 'id', '', 'CASCADE');
		$this->forge->addForeignKey('jenisTes', 'jenisTes', 'id', '', 'CASCADE');
		$this->forge->createTable('jawaban', true);
	}

	public function down()
	{
		//
	}
}
