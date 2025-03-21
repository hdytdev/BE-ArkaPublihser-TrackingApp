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
    Schema::table('orders', function (Blueprint $table) {
      $table->string('payment_link')->nullable();
      $table->string('invoice_file')->nullable();
      $table->string('kwitansi_file')->nullable();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::table('orders', function (Blueprint $table) {
      //
    });
  }
};
