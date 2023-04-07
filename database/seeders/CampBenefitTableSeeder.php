<?php

namespace Database\Seeders;

use App\Models\CampBenefit;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CampBenefitTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $campBenefits = [
            [
            'camp_id' => 1,
            'name' => 'Premium Tech Kit'
            ],
            [
            'camp_id' => 1,
            'name' => 'XPS Pro 2023 Display'
            ],
            [
            'camp_id' => 1,
            'name' => '1 - 1 Mentoring Program'
            ],
            [
            'camp_id' => 1,
            'name' => 'Final Project Certificate'
            ],
            [
            'camp_id' => 1,
            'name' => 'Offline Course Video'
            ],
            [
            'camp_id' => 1,
            'name' => 'Feature Job Oppurtunity'
            ],
            [
            'camp_id' => 1,
            'name' => 'Premium Design Kit'
            ],
            [
            'camp_id' => 1,
            'name' => 'Website Builder'
            ],
            [
            'camp_id' => 2,
            'name' => '1 - 1 Mentoring Program'
            ],
            [
            'camp_id' => 2,
            'name' => 'Final Project Certificate'
            ],
            [
            'camp_id' => 2,
            'name' => 'Offline Course Video'
            ],
    ];

    CampBenefit::insert($campBenefits);
    }
}
