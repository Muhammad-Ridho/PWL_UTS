<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $barang = array(
            array('BR001', 'Piring', 'kebutuhan', 3000, 100),
            array('BR002', 'Buku', 'atk', 15000, 50),
            array('BR003', 'mouse', 'elektronik', 3000, 100),
            array('BR004', 'keyboard', 'elektronk', 3000, 100),
            array('BR005', 'indomie', 'makanan', 3000, 100),
            array('BR006', 'Susu Coklat', 'minuman', 3000, 100),
            array('BR007', 'Masker 5Ply', 'kebutuhan', 3000, 100),
            array('BR008', 'sampo', 'kebutuhan', 3000, 100),
            array('BR009', 'sabun', 'peralatan mandi', 3000, 100),
            array('BR010', 'tisu', 'kebutuhan', 3000, 100),
            array('BR011', 'pensil', 'atk', 3000, 100),
            array('BR012', 'pulpen', 'atk', 3000, 100),
            array('BR013', 'penghapus', 'atk', 3000, 100),
            array('BR014', 'meja', 'kebutuhan', 3000, 100),
            array('BR015', 'kursi', 'kebutuhan', 3000, 100),
            array('BR016', 'kopi lanang', 'minuman', 3000, 100),
            array('BR017', 'minyak goreng', 'kebutuhan', 3000, 100),
            array('BR018', 'sapu', 'kebutuhan', 3000, 100),
            array('BR019', 'HVS', 'atk', 3000, 100),
            array('BR020', 'tas', 'kebutuhan', 3000, 100)
        );

        for($i = 0; $i < 20; $i++){
            DB::table('barangs')->insert([
                'kode_barang'       => $barang[$i][0],
                'nama_barang'       => $barang[$i][1],
                'kategori_barang'   => $barang[$i][2],
                'harga'             => $barang[$i][3],
                'qty'               => $barang[$i][4]
            ]);
        }
    }
}
