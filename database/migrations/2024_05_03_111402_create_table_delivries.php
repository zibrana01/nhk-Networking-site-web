<?php

use App\Models\Commande;
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
        Schema::create('table_delivries', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('delivery_adresse');
            $table->foreign('id')->references('id')->on('table_commandes')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_delivries');
    }

    public function Command(): BelongsTo
    {
        return $this->belongsTo(Commande::class);
    }
};
