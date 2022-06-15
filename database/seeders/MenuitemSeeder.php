<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades;

class MenuitemSeeder extends Seeder
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
                'access_group_id' => 0,
                'node' => 1,
                'mode' => 1,
                'level' => 0,
                'parent' => 0,
                'order' => 1,
                'purpose' => 'main',
                'mnemo' => 'home',
                'url' => '/',
                'section_id' => 1,
                'hidden' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'access_group_id' => 0,
                'node' => 2,
                'mode' => 2,
                'level' => 0,
                'parent' => 0,
                'order' => 2,
                'purpose' => 'main',
                'mnemo' => 'about',
                'url' => '/about',
                'section_id' => 2,
                'hidden' => 0,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'access_group_id' => 0,
                'node' => 3,
                'mode' => 3,
                'level' => 0,
                'parent' => 0,
                'order' => 3,
                'purpose' => 'main',
                'mnemo' => 'how2buy',
                'url' => '/how2buy',
                'section_id' => 3,
                'hidden' => 0,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'access_group_id' => 0,
                'node' => 4,
                'mode' => 4,
                'level' => 0,
                'parent' => 0,
                'order' => 4,
                'purpose' => 'main',
                'mnemo' => 'paymentanddelivery',
                'url' => '/payment_and_delivery',
                'section_id' => 4,
                'hidden' => 0,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'access_group_id' => 0,
                'node' => 5,
                'mode' => 5,
                'level' => 0,
                'parent' => 0,
                'order' => 5,
                'purpose' => 'main',
                'mnemo' => 'contacts',
                'url' => '/contacts',
                'section_id' => 5,
                'hidden' => 0,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ];

        foreach ($data as $portion) {
            Facades\DB::table('menuitems')->insert($portion);
        }
    }

}
