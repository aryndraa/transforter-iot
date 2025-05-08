<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('order_item_additional_variants', function (Blueprint $table) {
            $table->id();
            $table->foreignId('order_item_additional_id')->constrained('order_item_additional');
            $table->foreignId('additional_variant_id')->constrained('additional_variants');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_item_additional_variants');
    }
};
