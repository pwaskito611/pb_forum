<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CommentReport extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comment_report', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('reported_comment_id');
            $table->uuid('reporter_id');
            $table->text('reason');
            $table->text('additional')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comment_report');
    }
}
