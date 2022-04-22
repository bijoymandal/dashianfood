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
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('webtitle')->default('website')->nullable();
            $table->string('logo')->default('uploads/logo.png')->nullable();;
            $table->string('favicon')->default('uploads/favicon.jpg')->nullable();
            $table->string('facebook_link')->default('http://www.facebook.com')->nullable();
            $table->string('instragram_link')->default('http://www.instragram.com')->nullable();
            $table->string('linkedin_link')->default('http://www.linkedin.com')->nullable();
            $table->string('twitter_link')->default('http://www.twitter.com')->nullable();
            $table->string('youtube_link')->default('http://www.youtube.com')->nullable();
            $table->string('office_mail')->default('info@example.com')->nullable();
            $table->string('contact')->default('0123456789')->nullable();
            $table->string('address')->default('office address')->nullable();
            $table->string('currency_sign')->default('£')->nullable();
            $table->string('currency_code')->default('EUR')->nullable();
            $table->string('currency_sign2')->default('currency')->default();
            $table->string('currency_sign3')->default('currency')->default();
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
};