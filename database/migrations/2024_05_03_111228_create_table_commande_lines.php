<?php

use App\Models\Commande;
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
        Schema::create('table_commande_lines', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('quantity');
            $table->float('unit_price');
            $table->foreign('id')->references('id')->on('table_products')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_commande_lines');
    }

    public function Product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }

    public function Command(): BelongsTo
    {
        return $this->belongsTo(Commande::class);
    }
};
