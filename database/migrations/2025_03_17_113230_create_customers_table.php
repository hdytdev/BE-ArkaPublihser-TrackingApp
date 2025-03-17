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
        Schema::create('customers', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('email')->unique();
            $table->string('customer_id')->unique()->index();
            $table->string('name', 50)->index();
            $table->char('phone_number', 30)->index();
            $table->string('regional_origin');
            $table->foreignUuid('institution_id')->constrained('institutions')
                ->restrictOnDelete()
                ->cascadeOnUpdate();
            $table->string('position');
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
