<?php

namespace Database\Seeders;

use App\Models\Refaccion;
use Illuminate\Database\Seeder;

class RefaccionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Refaccion::factory()->times(20)->create();
    }
}
