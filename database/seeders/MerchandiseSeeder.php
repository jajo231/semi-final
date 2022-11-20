<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MerchandiseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Merchandise::factory(20)->create();
    }
}
