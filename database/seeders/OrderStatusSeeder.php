<?php

namespace Database\Seeders;

use App\Models\OrderStatus;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrderStatusSeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {
    $statusList = [
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

    foreach ($statusList as $val) {
      OrderStatus::firstOrCreate([
        'name' => $val
      ]);
    }

  }
}
