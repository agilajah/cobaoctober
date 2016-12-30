<?php namespace cobaoctober\Movies\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateCobaoctoberMovies3 extends Migration
{
    public function up()
    {
        Schema::table('cobaoctober_movies_', function($table)
        {
            $table->renameColumn('actor', 'actors');
        });
    }
    
    public function down()
    {
        Schema::table('cobaoctober_movies_', function($table)
        {
            $table->renameColumn('actors', 'actor');
        });
    }
}
