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
        Schema::create('lendings', function (Blueprint $table) {
            /*$table->id();*/ 
            $table->primary(['user_id', 'copi_id']);
            $table -> foreignId('user_id')->references('id')->on('lib_users');
            $table -> foreignId('copi_id')->references('copi_id')->on('copies');
            $table->date('start')->default(now());
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lendings');
    }
};
