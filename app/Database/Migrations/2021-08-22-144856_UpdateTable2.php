<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class UpdateTable2 extends Migration
{
	public function up()
	{
		$forge = \Config\Database::forge();
		$fields = [
			'name' => [
				'type' => 'VARCHAR',
				'constraint' => '100',
				'after' => 'id'
			],
			'provider_id' => [
				'type' => 'VARCHAR',
				'constraint' => '255',
				'after' => 'email'
			],
			'avatar' => [
				'type' => 'VARCHAR',
				'constraint' => '255',
				'after' => 'email'
			],
			'nik' => [
				'type' => 'int',
				'before' => 'email'
			],
			'jeniskelamin' => [
				'type' => 'VARCHAR',
				'constraint' => '10',
				'before' => 'email'
			],
			'alamat' => [
				'type' => 'VARCHAR',
				'constraint' => '100',
				'befor' => 'email'
			],
			'nohp' => [
				'type' => 'VARCHAR',
				'constraint' => '15',
				'before' => 'email'
			],
			'tanggallahir' => [
				'type' => 'date',
				'after' => 'email'
			],
			'agama' => [
				'type' => 'VARCHAR',
				'constraint' => '20',
				'after' => 'email'
			],
			'golongandarah' => [
				'type' => 'VARCHAR',
				'constraint' => '3',
				'after' => 'email'
			],
			'pendidikanterakhir' => [
				'type' => 'VARCHAR',
				'constraint' => '255',
				'after' => 'email'
			],
			'statusperkawinan' => [
				'type' => 'VARCHAR',
				'constraint' => '255',
				'after' => 'email'
			],
			'informasikesehatan' => [
				'type' => 'TEXT',
				'after' => 'email'
			]
		];
		$forge->addColumn('users', $fields);
	}

	public function down()
	{
		//
	}
}
