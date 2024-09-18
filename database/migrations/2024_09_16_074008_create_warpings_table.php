<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWarpingsTable extends Migration
{
    public function up()
    {
        Schema::create('warpings', function (Blueprint $table) {
            $table->id();
            $table->decimal('production_speed', 8, 2);  // Production speed
            $table->decimal('efficiency', 5, 2);  // Efficiency in percentage
            $table->decimal('warp_length', 8, 2);  // Length of warp
            $table->integer('yarn_count');  // Yarn count
            $table->integer('ends');  // Number of ends
            $table->decimal('total_warp_produced', 10, 2);  // Total warp produced
            $table->decimal('total_weight_of_warp', 10, 2);  // Total weight of the warp
            $table->timestamps();  // Created at and updated at timestamps
        });
    }

    public function down()
    {
        Schema::dropIfExists('warpings');
    }
}
