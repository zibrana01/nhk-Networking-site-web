<?php

use App\Models\Commande;
use App\Models\User;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
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
        Schema::create('table_clients', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('firstname');
            $table->string('lastname');
            $table->string('email')->unique();
            $table->string('phone_number');
            $table->string('adresse');
            $table->foreign('id')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps();
        });

        Schema::rename('table_clients' , 'clients');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_clients');
        Schema::rename('table_clients' , 'clients');
    }

    public function Command(): HasMany
    {
        return $this->hasMany(Commande::class);
    }

    public function User():BelongsTo
    {
        return $this->belongsTo(User::class);
    }
};
