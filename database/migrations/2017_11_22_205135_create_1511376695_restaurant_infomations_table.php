<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Create1511376695RestaurantInfomationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(! Schema::hasTable('restaurant_infomations')) {
            Schema::create('restaurant_infomations', function (Blueprint $table) {
                $table->increments('id');
                $table->string('restaurant_name')->nullable();
                $table->text('restaurant_description')->nullable();
                
                $table->timestamps();
                $table->softDeletes();

                $table->index(['deleted_at']);
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('restaurant_infomations');
    }
}
