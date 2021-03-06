<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToChannelsTable extends Migration
{
    public function up()
    {
        Schema::table('channels', function (Blueprint $table) {
            $table->unsignedBigInteger('biological_set_id')->nullable();
            $table->foreign('biological_set_id', 'biological_set_fk_6467569')->references('id')->on('biological_sets');
            $table->unsignedBigInteger('created_by_id')->nullable();
            $table->foreign('created_by_id', 'created_by_fk_6614741')->references('id')->on('users');
        });
    }
}
