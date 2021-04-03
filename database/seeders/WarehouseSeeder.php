<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WarehouseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'id_barang' => '1',
                'kode_barang' => 'KPY101',
                'nama_barang' => 'Indomie Goreng Pedas',
                'kategori_barang' => 'Makanan',
                'harga' => '3000',
                'qty' => '100',
                'tanggal_barang_masuk' => '2020-01-21',
                'tanggal_barang_keluar' => '2020-05-11',
               ],
               [
                'id_barang' => '2',
                'kode_barang' => 'NHK101',
                'nama_barang' => 'Coca - Cola',
                'kategori_barang' => 'Minuman',
                'harga' => '5000',
                'qty' => '500',
                'tanggal_barang_masuk' => '2018-08-02',
                'tanggal_barang_keluar' => '2020-10-05',
               ],
            ];   
               DB::table('warehouses')->insert($data);  
        }
    }

