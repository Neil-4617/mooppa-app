<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Landlord;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    // rickys 09563600338
    public function up(): void
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Landlord::class)->constrained()->cascadeOnDelete();
            $table->string('unit_name');
            $table->string('image');
            $table->longText('description');
            $table->longText('location');
            $table->string('size');
            $table->string('type');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('properties');
    }
};
