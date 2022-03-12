<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTopicColumnToVideoContentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('video_contents', function (Blueprint $table) {
            $table->string('topic')->nullable()->after('category_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('video_contents', function (Blueprint $table) {
            $table->dropColumn('topic');
        });
    }
}
