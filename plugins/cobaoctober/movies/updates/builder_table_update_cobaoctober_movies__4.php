<?php namespace cobaoctober\Movies\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateCobaoctoberMovies4 extends Migration
{
    public function up()
    {
        Schema::table('cobaoctober_movies_', function($table)
        {
            $table->dropColumn('actors');
        });
    }
    
    public function down()
    {
        Schema::table('cobaoctober_movies_', function($table)
        {
            $table->text('actors')->nullable();
        });
    }
}
