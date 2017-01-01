<?php namespace cobaoctober\Movies\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateCobaoctoberMoviesComments2 extends Migration
{
    public function up()
    {
        Schema::table('cobaoctober_movies_comments', function($table)
        {
            $table->integer('movie_id')->unsigned();
        });
    }
    
    public function down()
    {
        Schema::table('cobaoctober_movies_comments', function($table)
        {
            $table->dropColumn('movie_id');
        });
    }
}
