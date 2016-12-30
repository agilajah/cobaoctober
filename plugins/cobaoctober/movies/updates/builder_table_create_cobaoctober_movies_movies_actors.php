<?php namespace cobaoctober\Movies\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateCobaoctoberMoviesMoviesActors extends Migration
{
    public function up()
    {
        Schema::create('cobaoctober_movies_movies_actors', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('movie_id')->unsigned();
            $table->integer('actor_id')->unsigned();
            $table->primary(['movie_id','actor_id']);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('cobaoctober_movies_movies_actors');
    }
}
