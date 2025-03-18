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
    Schema::create('journals', function (Blueprint $table) {
      $table->uuid('id')->primary();
      $table->string('abbreviation');
      $table->string('name')->index();
      $table->string('apc_charge');
      $table->string('processing_time');
      $table->enum('category', [
        'internal',
        'scopus',
        'external'
      ]);
      $table->string('focus');
      $table->string('scope');
      $table->string('index');
      $table->string('accreditation');
      $table->string('journal_link');
      $table->string('issn')->nullable()->index();
      $table->string('publisher')->nullable();
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('journals');
  }
};
