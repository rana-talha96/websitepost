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
        Schema::create('user_website', function (Blueprint $table) {
            $table->foreignId('user_id')
                ->constrained('users')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreignId('website_id')
                ->constrained('websites')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->primary(['user_id', 'website_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_website');
    }
};
