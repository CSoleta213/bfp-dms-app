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
        Schema::create('applicants', function (Blueprint $table) {
            $table->id();
            $table->string('bin_ban');
            $table->string('bus_name');
            $table->string('owner');
            $table->string('postal_code');
            $table->string('province');
            $table->string('municipality');
            $table->set('brgy',['Balucuc','Calantipe','Cansinala','Capalangan','Colgante','Paligui','Sampaloc','San Juan','San Vicente','Sucad','Sulipan','Tabuyuc']);
            $table->string('spec_address');
            $table->string('contact_no');
            $table->set('occupancy_type',['Apartment','Hotel','Mercantile','Business','Storage','Industrial','Healthcare','Educational','Special Structures']);
            $table->string('exp_date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('applicants');
    }
};
