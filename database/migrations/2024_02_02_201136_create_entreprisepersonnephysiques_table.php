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
        Schema::create('entreprisepersonnephysiques', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('logo');
            $table->string('photo_de_profil'); 
            $table->string('email')->unique();
            $table->string('image_de_couverture');
            $table->string('job_title');
            $table->string('url'); 
            $table->string('adresse');
            $table->string('telephone');
            $table->string('password');
            $table->string('departement');
            $table->string('couleur');
            $table->string('police');
            $table->string('facebook');
            $table->string('instagram');
            $table->string('snapchat');
            $table->string('linkedin');
            $table->string('tik_tok');
            $table->string('youtube');
            $table->string('whatsapp');
            $table->string('yelp');
            $table->string('github');
            $table->string('gitlab');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('entreprisepersonnephysiques');
    }
};
