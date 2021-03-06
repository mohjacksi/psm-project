<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeptidesTable extends Migration
{
    public function up()
    {
        Schema::create('peptides', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('sequence')->nullable();
            $table->boolean('canonical')->default(0)->nullable();
            $table->longText('canonical_frame_value')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
