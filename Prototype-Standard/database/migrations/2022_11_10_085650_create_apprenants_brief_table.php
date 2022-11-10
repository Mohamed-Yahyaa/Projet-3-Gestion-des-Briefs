<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('apprenants_briefs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('apprenants_id')
            ->references('id')
            ->on('apprenants')
            ->onDelete('cascade');
            $table->foreignId('briefs_id')
            ->references('id')
            ->on('briefs')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('apprenants_briefs');
    }
};
