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
        Schema::create('asset_inventories', function (Blueprint $table) {
            $table->id();
            $table->string('assetid');
            $table->string('assetDescription');
            $table->string('assetClass');
            $table->string('assetCategory');
            $table->string('assetQty');
            $table->string('assetUnit');
            $table->string('assetStatus');
            $table->string('assetRemarks');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('asset_inventories');
    }
};
