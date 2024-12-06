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
        Schema::create('user_admin', function (Blueprint $table) {
            $table->primary(['user_id','admin_id']);
            $table->bigInteger('user_id')->unsigned();
            $table->bigInteger('admin_id')->unsigned();
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')
               ->onDelete('cascade')->onUpdate('cascade');
                
            $table->foreign('admin_id')->references('id')->on('admins')
                ->onDelete('cascade')->onUpdate('cascade');
           
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_admin');
    }
};
