<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeginKeyToToolsTags extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tools_tags', function (Blueprint $table) {
            $table->foreign('tool_id', 'tool_id_ibfk_1')->references('id')->on('tools')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign('tag_id', 'tag_id_ibfk_1')->references('id')->on('tags')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tools_tags', function (Blueprint $table) {
            $table->dropForeign('tool_id_ibfk_1');
            $table->dropForeign('tag_id_ibfk_1');
        });
    }
}
