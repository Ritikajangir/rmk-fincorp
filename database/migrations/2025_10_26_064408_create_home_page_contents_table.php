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
        Schema::create('home_page_contents', function (Blueprint $table) {
            $table->id();
            // Hero Section
            $table->string('first_heading')->nullable();
            $table->string('main_heading')->nullable();
            $table->text('sub_heading')->nullable();
            $table->string('hero_image')->nullable();

            $table->string('about_us_heading')->nullable();
            $table->text('about_us_content')->nullable();
            $table->string('about_us_image')->nullable();

            $table->string('our_mission_main_heading')->nullable();
            $table->text('our_mission_sub_heading')->nullable();
            $table->string('our_mission_image')->nullable();

            $table->string('choose_us_main_heading')->nullable();
            $table->text('choose_us_sub_heading')->nullable();
            $table->string('choose_us_image')->nullable();

            $table->string('our_team_main_heading')->nullable();
            $table->text('our_team_sub_heading')->nullable();

            $table->string('testimonial_main_heading')->nullable();
            $table->text('testimonial_sub_heading')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('home_page_contents');
    }
};
