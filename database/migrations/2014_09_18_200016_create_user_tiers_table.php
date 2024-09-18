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
        Schema::create('user_tiers', function (Blueprint $table) {
            $table->bigIncrements('id_user_tier');
            $table->string("user_tier_name");
            $table->timestamps();
            $table->softDeletes();
         });
    }

    /**
     * Reverse the migrations.
     */
    public function down(){
        Schema::table('user_tiers', function (Blueprint $table) {
        $table->dropSoftDeletes();
        });
    }
};