<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddUserTemplatesIdToUserActionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('user_actions', function (Blueprint $table) {
            $table->unsignedBigInteger('user_templates_id');
            $table->foreign('user_templates_id')->references('id')->on('user_templates');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('user_actions', function (Blueprint $table) {
            $table->dropColumn('user_templates_id');
        });
    }
}
