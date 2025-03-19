<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
  /**
   * Run the migrations.
   */
  public function up(): void
  {
    Schema::create('order_notes', function (Blueprint $table) {
      $table->uuid('id')->primary();
      $table->foreignUuid('order_status_id')->constrained('order_statuses')->cascadeOnUpdate()->restrictOnDelete();
      $table->text('note');
      $table->foreignUuid('order_id')->constrained('orders')->cascadeOnUpdate()->restrictOnDelete();
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('order_notes');
  }
};
