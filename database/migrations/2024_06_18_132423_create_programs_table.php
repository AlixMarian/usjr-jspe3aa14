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
        Schema::create('programs', function (Blueprint $table) {
            $table->id('progid');
            $table->string('progfullname', 100);
            $table->string('progshortname', 20);
            $table->unsignedBigInteger('progcollid');
            $table->unsignedBigInteger('progcolldeptid');
            $table->timestamps();

            $table->foreign('progcollid')->references('collid')->on('colleges');
            $table->foreign('progcolldeptid')->references('deptid')->on('departments');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('programs');
    }
};
