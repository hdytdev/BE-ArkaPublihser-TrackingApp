<?php

namespace Database\Seeders;

use App\Models\Package;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PackageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Package::firstOrCreate([
            'name' => "Ekonomis",
            'active' => true,
        ]);
        Package::firstOrCreate([
            'name' => "Reguler",
            'active' => true,
        ]);
        Package::firstOrCreate([
            'name' => "Ekslusive",
            'active' => true,
        ]);
    }
}
