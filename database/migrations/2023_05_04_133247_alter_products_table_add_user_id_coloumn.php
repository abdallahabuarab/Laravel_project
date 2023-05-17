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
       Schema::table('products' , function(Blueprint $table){
        $table->unsignedBigInteger('brand_id');

        $table->foreign('brand_id')->on('brands')->references('id')->onDelete('cascade');

        /*
     Schema::table('products', function (Blueprint $table) {
    $table->foreignId('brand_id')->constrained();
});
        */

       });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
