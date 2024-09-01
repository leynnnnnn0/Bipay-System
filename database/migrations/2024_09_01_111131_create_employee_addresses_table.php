<?php

use App\Models\Employees;
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
        Schema::create('employee_addresses', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Employees::class)->constrained()->cascadeOnDelete();
            $table->string('municipality');
            $table->string('barangay');
            $table->string('cityOrProvince');
            $table->string('postalCode');
            $table->string('streetAddress');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employee_addresses');
    }
};