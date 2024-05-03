<?php

use App\Models\Category;
use App\Models\CommandeLine;
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
        Schema::create('table_products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('productName');
            $table->float('price');
            $table->text('description');
            $table->string('image');
            $table->integer('quantite_stock');
            $table->boolean('published');
            $table->timestamps();
        });
        /**
         * renamed table name
         */
        Schema::rename('table_products', 'products');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_products');
        Schema::rename('table_products', 'products');

    }

    public function Category():HasMany
    {
        return $this->hasMany(Category::class);
    }

    public function CommandLine():HasMany
    {
        return $this->hasMany(CommandeLine::class);
    }
};
