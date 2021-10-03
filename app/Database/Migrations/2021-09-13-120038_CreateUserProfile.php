<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateUserProfile extends Migration
{
	public function up()
	{
		//Pengalaman Kerja
		$this->forge->addField(
			[
				'id'               => ['type' => 'int', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true],
				'userId'					 => ['type' => 'int', 'constraint' => 11, 'unsigned' => true],
				'namaPerusahaan'   => ['type' => 'varchar', 'constraint' => 30, 'null' => true],
				'jabatanAwal'      => ['type' => 'varchar', 'constraint' => 20, 'null' => true],
				'jabatanAkhir'     => ['type' => 'varchar', 'constraint' => 20, 'null' => true],
				'mulaiBekerja'     => ['type' => 'datetime', 'null' => true],
				'akhirBekerja'     => ['type' => 'datetime', 'null' => true],
				'gaji'				   	 => ['type' => 'int', 'constraint' => 11, 'unsigned' => true],
				'namaAtasan'			 => ['type' => 'int', 'constraint' => 11, 'unsigned' => true],
				'alasanKeluar'		 => ['type' => 'text', 'null' => true],
			]
		);
		$this->forge->addKey('id', true);
		$this->forge->addForeignKey('userId', 'users', 'id', '', 'CASCADE');
		$this->forge->createTable('pengalamankerja', true);


		//Riwayat Pendidikan Formal
		$this->forge->addField(
			[
				'id'               => ['type' => 'int', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true],
				'userId'					 => ['type' => 'int', 'constraint' => 11, 'unsigned' => true],
				'tingkatan'  			 => ['type' => 'varchar', 'constraint' => 30, 'null' => true],
				'namaInstitut'     => ['type' => 'varchar', 'constraint' => 20, 'null' => true],
				'kota'				     => ['type' => 'varchar', 'constraint' => 20, 'null' => true],
				'jurusan'			     => ['type' => 'varchar', 'constraint' => 20, 'null' => true],
				'tahunMulai'  	   => ['type' => 'datetime', 'null' => true],
				'tahunAkhir'	     => ['type' => 'datetime', 'null' => true],
				'keterangan'			 => ['type' => 'text', 'null' => true],
				'sertifikat'			 => ['type' => 'varchar', 'constraint' => 20, 'null' => true],
			]
		);
		$this->forge->addKey('id', true);
		$this->forge->addForeignKey('userId', 'users', 'id', '', 'CASCADE');
		$this->forge->createTable('pendidikanFormal', true);

		//Riwayat Pendidikan inFormal
		$this->forge->addField(
			[
				'id'               => ['type' => 'int', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true],
				'userId'					 => ['type' => 'int', 'constraint' => 11, 'unsigned' => true],
				'bidang'  			   => ['type' => 'varchar', 'constraint' => 30, 'null' => true],
				'namaInstitut'     => ['type' => 'varchar', 'constraint' => 20, 'null' => true],
				'kota'				     => ['type' => 'varchar', 'constraint' => 20, 'null' => true],
				'lamaKursus'			 => ['type' => 'int', 'unsigned' => true],
				'tahun'  	         => ['type' => 'int', 'constraint' => 4, 'unsigned' => true],
				'keterangan'			 => ['type' => 'text', 'null' => true],
				'sertifikat'			 => ['type' => 'varchar', 'constraint' => 20, 'null' => true],
				'dibiayaiOleh'		 => ['type' => 'varchar', 'constraint' => 20, 'null' => true],
			]
		);
		$this->forge->addKey('id', true);
		$this->forge->addForeignKey('userId', 'users', 'id', '', 'CASCADE');
		$this->forge->createTable('pendidikanNonformal', true);
	}

	public function down()
	{
		//
	}
}
