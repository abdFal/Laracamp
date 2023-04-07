<?php

namespace Database\Seeders;

use App\Models\Camp;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CampTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $camps = [
            [
                'title' => 'Rajin Belajar',
                'slug' => 'rajin-belajar',
                'price' => 450,
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time())
            ],
            [
                'title' => 'Baru Mulai',
                'slug' => 'baru-mulai',
                'price' => 300,
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time())
            ],
            ];

        Camp::insert($camps);
    }
}
