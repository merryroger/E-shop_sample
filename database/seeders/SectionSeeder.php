<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades;

class SectionSeeder extends Seeder
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
                'bip' => 0x1,
                'name' => 'home',
                'entry_point' => 'templates.guest.default',
                'gen_view' => 'default',
                'template' => 'templates.guest.homepage',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 2,
                'bip' => 0x1,
                'name' => 'about',
                'entry_point' => 'templates.guest.subpage',
                'gen_view' => 'default',
                'template' => 'templates.guest.about',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 3,
                'bip' => 0x1,
                'name' => 'payment_and_delivery',
                'entry_point' => 'templates.guest.subpage',
                'gen_view' => 'default',
                'template' => 'templates.guest.paymentdelivery',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 4,
                'bip' => 0x1,
                'name' => 'contacts',
                'entry_point' => 'templates.guest.contacts',
                'gen_view' => 'default',
                'template' => 'templates.guest.contacts',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ];

        foreach ($data as $portion) {
            Facades\DB::table('sections')->insert($portion);
        }
    }
}
