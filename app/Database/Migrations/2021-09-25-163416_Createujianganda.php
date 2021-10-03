<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Createujianganda extends Migration
{
	public function up()
	{
		$this->forge->addField(
			[
				'id'               => ['type' => 'int', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true],
				'jenisTes'   			 => ['type' => 'varchar', 'constraint' => 255, 'null' => true],
				'keterangan'      => ['type' => 'varchar', 'constraint' => 20, 'null' => true],
			]
		);
		$this->forge->addKey('id', true);
		$this->forge->createTable('jenisTes', true);


		$this->forge->addField(
			[
				'id'               => ['type' => 'int', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true],
				'userId'					 => ['type' => 'int', 'constraint' => 11, 'unsigned' => true],
				'jenisTes'				 => ['type' => 'int', 'constraint' => 11, 'unsigned' => true],
				'soal'			 			 =>  ['type' => 'text', 'null' => false],
				'a'    						 => ['type' => 'varchar', 'constraint' => 255, 'null' => true],
				'b'    						 => ['type' => 'varchar', 'constraint' => 255, 'null' => true],
				'c'    						 => ['type' => 'varchar', 'constraint' => 255, 'null' => true],
				'd'    						 => ['type' => 'varchar', 'constraint' => 255, 'null' => true],
				'e'    						 => ['type' => 'varchar', 'constraint' => 255, 'null' => true],
				'kunci'  		       => ['type' => 'varchar', 'constraint' => 3, 'null' => true],
			]
		);
		$this->forge->addKey('id', true);
		$this->forge->addForeignKey('userId', 'users', 'id', '', 'CASCADE');
		$this->forge->addForeignKey('jenisTes', 'jenisTes', 'id', '', 'CASCADE');
		$this->forge->createTable('ujianpilihanberganda', true);
	}

	public function down()
	{
		//
	}
}
