<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TblPeserta extends Migration
{
	public function up()
        {
                $this->forge->addField([
                        'id_peserta'          => [
                                'type'           => 'INT',
                                'constraint'     => 5,
                                'unsigned'       => true,
                                'auto_increment' => true,
                        ],
                        'nama' => [
                                'type' => 'VARCHAR',
                                'constraint' => '255',
						],
						'alamat'          => [
                                'type' => 'VARCHAR',
                                'constraint' => '255',
                        ],
                        'jurusan'       => [
								'type' => 'VARCHAR',
								'constraint' => '255',
                                'null' => false,
						],
                        'create_date'       => [
							'type' => 'DATETIME',
							'null' => true,
						],
						'update_date'       => [
							'type' => 'DATETIME',
							'null' => true,
				],	
                ]);
                $this->forge->addKey('id_peserta', true);
                $this->forge->createTable('tbl_peserta');
        }

        public function down()
        {
                $this->forge->dropTable('tbl_peserta');
        }
}
