<?php

use App\Models\Product;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
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
        Schema::create('table_categories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name_category');
            $table->foreign('id')->references('id')->on('products')->onDelete('cascade');
            $table->timestamps();
        });

        //rename table

        Schema::rename('table_categories', 'categories');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_categories');

        Schema::rename('table_categories', 'categories');
    }

    public function Product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }
};
