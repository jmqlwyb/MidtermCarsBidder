<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Bidder;

class BidderSeeder extends Seeder
{
    public function run()
    {
        Bidder::updateOrCreate(
            ['email' => 'rmagallanes@example.com'],
            [
                'first_name' => 'Raymart',
                'last_name' => 'Magallanes',
                'address' => '123 Main Street, NY',
            ]
        );

        Bidder::updateOrCreate(
            ['email' => 'bmaglaway@example.com'],
            [
                'first_name' => 'Benito',
                'last_name' => 'Maglaway',
                'address' => '456 Elm Street, CA',
            ]
        );


        \App\Models\Bidder::factory(10)->create();
    }
}
