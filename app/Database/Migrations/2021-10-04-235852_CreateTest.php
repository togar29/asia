<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTest extends Migration
{
	public function up()
	{
		$this->forge->addField(
			[
				'id'               => ['type' => 'int', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true],
				'jenisTes'				 => ['type' => 'int', 'constraint' => 11, 'unsigned' => true],
				'nilaiA'   			 => ['type' => 'varchar', 'constraint' => 255, 'null' => true],
				'nilaiB'   			 => ['type' => 'varchar', 'constraint' => 255, 'null' => true],
				'kunci'   			 => ['type' => 'varchar', 'constraint' => 5, 'null' => true],
			]
		);
		$this->forge->addKey('id', true);
		$this->forge->addForeignKey('jenisTes', 'jenisTes', 'id', '', 'CASCADE');
		$this->forge->createTable('tahap_i_a', true);


		$this->forge->addField(
			[
				'id'               => ['type' => 'int', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true],
				'jenisTes'				 => ['type' => 'int', 'constraint' => 11, 'unsigned' => true],
				'soal'   			 => ['type' => 'varchar', 'constraint' => 255, 'null' => true],
				'kunci'   			 => ['type' => 'varchar', 'constraint' => 255, 'null' => true],
			]
		);
		$this->forge->addKey('id', true);
		$this->forge->addForeignKey('jenisTes', 'jenisTes', 'id', '', 'CASCADE');
		$this->forge->createTable('isian', true);
	}

	public function down()
	{
		//
	}
}
