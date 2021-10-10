<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Createpertanyaanprofil extends Migration
{
	public function up()
	{
		$this->forge->addField(
			[
				'id'               => ['type' => 'int', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true],
				'jenisTes'				 => ['type' => 'int', 'constraint' => 11, 'unsigned' => true],
				'pertanyaan'			   => ['type' => 'varchar', 'constraint' => 30, 'null' => true],
			]
		);
		$this->forge->addKey('id', true);
		$this->forge->addForeignKey('jenisTes', 'jenisTes', 'id', '', 'CASCADE');
		$this->forge->createTable('pertanyaanessay', true);
	}

	public function down()
	{
		//
	}
}
