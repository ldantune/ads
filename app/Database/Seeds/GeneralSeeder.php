<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class GeneralSeeder extends Seeder
{
    public function run()
    {
        $this->call(SuperAdminSeeder::class);
        $this->call(PlanSeeder::class);
    }
}
