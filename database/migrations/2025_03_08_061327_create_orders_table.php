<?php

use App\Models\Article;
use App\Models\Customer;
use App\Models\Journal;
use App\Models\PackageOrder;
use App\Models\PublicationStatus;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string("id_order")->unique();
            $table->foreignIdFor(Customer::class)->constrained("customers");
            $table->enum('status_term_1', [
                "PAD",
                "UNPAID"
            ])->default("UNPAID");
            $table->enum('status_term_2', [
                "PAD",
                "UNPAID"
            ])->default("UNPAID");
            $table->enum('status_term_3', [
                "PAD",
                "UNPAID"
            ])->default("UNPAID");
            $table->string("receipt_file")->nullable();
            $table->string("invoice_file")->nullable();
            $table->string("payment_link")->nullble();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
