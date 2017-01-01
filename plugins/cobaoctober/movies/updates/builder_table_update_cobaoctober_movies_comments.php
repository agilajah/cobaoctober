<?php namespace cobaoctober\Movies\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateCobaoctoberMoviesComments extends Migration
{
    public function up()
    {
        Schema::table('cobaoctober_movies_comments', function($table)
        {
            $table->dateTime('timestamp');
        });
    }
    
    public function down()
    {
        Schema::table('cobaoctober_movies_comments', function($table)
        {
            $table->dropColumn('timestamp');
        });
    }
}
