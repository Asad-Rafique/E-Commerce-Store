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
        Schema::create('prodects', function (Blueprint $table) {
            $table->id();
            $table->string("NameProdect")->nullable();
            $table->string("DiscriptionProdect")->nullable();
            $table->string("ImageProdect")->nullable();
            $table->string("PriceProdect")->nullable();
            $table->string("CategryProdect")->nullable();
            $table->string("QuntetyProdect")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('prodects');
    }
};
