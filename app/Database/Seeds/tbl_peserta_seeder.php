<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class tbl_peserta_seeder extends Seeder
{
        public function run()
        {
            $faker = \Faker\Factory::create('id_ID');

            for ($i = 0; $i <= 100; $i++){
                $data = [
                        'nama'    => $faker->name,
                        'alamat' => $faker->address,
                        'jurusan'    => 'IT',
                        'create_date' => Time::now('Asia/Jakarta', 'en_US'),
                        'update_date' => Time::now('Asia/Jakarta', 'en_US')   
                ];
                
                $this->db->table('tbl_peserta')->insert($data);

            }

                // Simple Queries
                // $this->db->query("INSERT INTO tbl_peserta (nama, alamat, jurusan, create_date, update_date) VALUES(:nama:, :alamat:,:jurusan:, :create_date:, :update_date:)", $data);

                // Using Query Builder
                // $this->db->table('tbl_peserta')->insertBatch($data);
        }
}