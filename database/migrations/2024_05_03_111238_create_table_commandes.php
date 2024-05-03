<?php

use App\Models\Client;
use App\Models\CommandeLine;
use App\Models\Delivery;
use App\Models\Payment;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
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
        Schema::create('table_commandes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->float('amount');
            $table->enum('state',['cancelled','pending','progressing','delivered','payment pending']);
            $table->string('delivry_adresse');
            $table->string('payment_mode');
            //$table->foreign('id')->references('id')->on('table_delivries')->onDelete('cascade');
            //$table->foreign('id')->references('id')->on('table_payments')->onDelete('cascade');
            $table->foreign('id')->references('id')->on('table_clients')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_commandes');
    }

    public function CommandLine(): HasMany
    {
        return $this->hasMany(CommandeLine::class);
    }
    public function Delivery(): HasOne
    {
        return $this->hasOne(Delivery::class);
    }
    public function Payment(): HasOne
    {
        return $this->hasOne(Payment::class);
    }

    public function Client():BelongsTo
    {
        return $this->belongsTo(Client::class);
    }

};
