<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(PackageSeeder::class);
        $this->call(PublicationStatusSeeder::class);
        $this->call(InstitutionSeeder::class);
        $this->call(CustomerSeeder::class);
        $this->call(OrderStatusSeeder::class);
        $this->call(JournalSeeder::class);
    }
}
