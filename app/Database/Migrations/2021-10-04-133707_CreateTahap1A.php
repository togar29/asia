<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTahap1A extends Migration
{
	public function up()
	{
		$this->forge->addField(
			[
				'id'               => ['type' => 'int', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true],
				'nilaiA'   			 => ['type' => 'varchar', 'constraint' => 255, 'null' => true],
				'nilaiB'   			 => ['type' => 'varchar', 'constraint' => 255, 'null' => true],
				'kunci'   			 => ['type' => 'varchar', 'constraint' => 5, 'null' => true],
			]
		);
		$this->forge->addKey('id', true);
		$this->forge->createTable('tahap_i_a', true);


		$this->forge->addField(
			[
				'id'               => ['type' => 'int', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true],
				'soal'   			 => ['type' => 'varchar', 'constraint' => 255, 'null' => true],
				'kunci'   			 => ['type' => 'varchar', 'constraint' => 255, 'null' => true],
			]
		);
		$this->forge->addKey('id', true);
		$this->forge->createTable('tahap_i_b', true);

		$this->forge->addField(
			[
				'id'               => ['type' => 'int', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true],
				'soal'   			 => ['type' => 'varchar', 'constraint' => 255, 'null' => true],
				'kunci'   			 => ['type' => 'varchar', 'constraint' => 255, 'null' => true],
			]
		);
		$this->forge->addKey('id', true);
		$this->forge->createTable('tahap_i_c', true);

		$this->forge->addField(
			[
				'id'               => ['type' => 'int', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true],
				'soal'   			 => ['type' => 'varchar', 'constraint' => 255, 'null' => true],
				'kunci'   			 => ['type' => 'varchar', 'constraint' => 255, 'null' => true],
			]
		);
		$this->forge->addKey('id', true);
		$this->forge->createTable('tahap_i_f', true);


		$this->forge->addField(
			[
				'id'               => ['type' => 'int', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true],
				'soal'   			 => ['type' => 'varchar', 'constraint' => 255, 'null' => true],
				'kunci'   			 => ['type' => 'varchar', 'constraint' => 255, 'null' => true],
			]
		);
		$this->forge->addKey('id', true);
		$this->forge->createTable('tahap_i_g', true);

		$this->forge->addField(
			[
				'id'               => ['type' => 'int', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true],
				'soal'   			 => ['type' => 'varchar', 'constraint' => 255, 'null' => true],
				'kunci'   			 => ['type' => 'varchar', 'constraint' => 255, 'null' => true],
			]
		);
		$this->forge->addKey('id', true);
		$this->forge->createTable('tahap_ii_b', true);
	}

	public function down()
	{
		//
	}
}
