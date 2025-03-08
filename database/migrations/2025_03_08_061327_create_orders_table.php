<?php

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
            $table->foreignIdFor(Journal::class)->constrained('journals');
            $table->foreignIdFor(Customer::class)->constrained("customers");
            $table->string('title');
            $table->string('author_name');
            $table->foreignIdFor(PackageOrder::class)->constrained('package_orders');
            $table->foreignIdFor(PublicationStatus::class)->constrained('publication_statuses');
            $table->string(column: 'link_publish')->nullable();
            $table->date('submit_date');
            $table->timestamp('order_date');
            $table->date('estimated_publish');
            $table->date('publish_date')->nullable();
            $table->string('loa_file')->nullable();
            $table->string('article_file');
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
