<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFrontAndBackSideExtensionForVehicles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('vehicles', function (Blueprint $table) {
            $table->string('front_side_extension')->nullable();
            $table->string('back_side_extension')->nullable();
            $table->string('images_extension')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('vehicles', function (Blueprint $table) {
            $table->dropColumn('front_side_extension');
            $table->dropColumn('back_side_extension');
            $table->dropColumn('images_extension');
        });
    }
}
