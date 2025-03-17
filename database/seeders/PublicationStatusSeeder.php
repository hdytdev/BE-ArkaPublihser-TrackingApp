<?php

namespace Database\Seeders;

use App\Models\PublicationStatus;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PublicationStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $statusOptions = [
            "Screening",
            "Editing Queue",
            "Editing",
            "Submitted",
            "Review",
            "Author Revision",
            "LoA Rises",
            "Copy Editing",
            "Published"
        ];
        foreach ($statusOptions as  $value) {
            PublicationStatus::firstOrCreate([
                'name' => $value,
                'active' => true,
            ]);
        }
    }
}
