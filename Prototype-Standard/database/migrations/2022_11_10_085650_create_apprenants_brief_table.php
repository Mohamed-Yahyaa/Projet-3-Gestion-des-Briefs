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
        Schema::create('apprenants_brief', function (Blueprint $table) {
            $table->id();
            // $table->unsignedInteger("apprenant_id");
            // $table->unsignedInteger("brief_id");
            $table->foreignId('apprenant_id')
            ->references('id')
            ->on('apprenants')
            ->onDelete('cascade');
            $table->foreignId('brief_id')
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
        Schema::dropIfExists('apprenants_brief');
    }
};
