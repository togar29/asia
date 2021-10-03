<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Createkeluarga extends Migration
{
	public function up()
	{
		$this->forge->addField(
			[
				'id'               => ['type' => 'int', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true],
				'userId'					 => ['type' => 'int', 'constraint' => 11, 'unsigned' => true],
				'hubungan'			   => ['type' => 'varchar', 'constraint' => 30, 'null' => true],
				'nama'    				 => ['type' => 'varchar', 'constraint' => 30, 'null' => true],
				'alamat'  		     => ['type' => 'varchar', 'constraint' => 20, 'null' => true],
				'nohp' 			       => ['type' => 'varchar', 'constraint' => 20, 'null' => true],
				'pendidikan'       => ['type' => 'varchar', 'constraint' => 20, 'null' => true],
				'pekerjaan'        => ['type' => 'varchar', 'constraint' => 20, 'null' => true],
				'tanggungan'       => ['type' => 'varchar', 'constraint' => 10, 'null' => true],
			]
		);
		$this->forge->addKey('id', true);
		$this->forge->addForeignKey('userId', 'users', 'id', '', 'CASCADE');
		$this->forge->createTable('datakeluarga', true);
	}

	public function down()
	{
		//
	}
}
