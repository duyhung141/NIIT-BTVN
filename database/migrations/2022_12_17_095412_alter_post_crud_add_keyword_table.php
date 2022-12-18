<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterPostCrudAddKeywordTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('post_crud',function(Blueprint $table){
            $table->string('keyword')->after('content');
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
        Schema::hash_column('post_crud','keyword')?Schema::table('post_crud',function(Blueprint $table){
            $table->dropColumn('keyword');
        }):null;
    }
}
