<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->text('skills_desc')->nullable();
            $table->text('knows_desc')->nullable();
            $table->text('langs_desc')->nullable();
            $table->text('exp_desc')->nullable();
            $table->text('educ_desc')->nullable();
            $table->text('con_desc')->nullable();
            $table->text('website_name')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('settings');
    }
}
