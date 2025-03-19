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
    Schema::create('articles', function (Blueprint $table) {
      $table->uuid('id')->primary();
      $table->foreignUuid('journal_id')->constrained('journals');
      $table->foreignUuid("order_id")->constrained('orders')->cascadeOnUpdate()->restrictOnDelete();
      $table->string('title')->index();
      $table->string('article_link')->nullable();
      $table->string('authors');
      $table->date('publish_date')->nullable();
      $table->date('estimated_publish_date');
      $table->string('loa_file')->nullable();
      $table->date('submit_date')->nullable();
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('articles');
  }
};
