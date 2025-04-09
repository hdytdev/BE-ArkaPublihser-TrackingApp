<?php

namespace Database\Seeders;

use App\Models\Position;
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
        User::factory(10)->create();
        Position::factory(20)->create();
        $this->call(PackageSeeder::class);
        $this->call(PublicationStatusSeeder::class);
        $this->call(InstitutionSeeder::class);
        $this->call(CustomerSeeder::class);
        $this->call(OrderStatusSeeder::class);
        $this->call(JournalSeeder::class);
    }
}
