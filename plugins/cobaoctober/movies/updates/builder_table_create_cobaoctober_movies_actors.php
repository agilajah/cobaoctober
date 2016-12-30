<?php namespace cobaoctober\Movies\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateCobaoctoberMoviesActors extends Migration
{
    public function up()
    {
        Schema::create('cobaoctober_movies_actors', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('name')->nullable();
            $table->string('lastname')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('cobaoctober_movies_actors');
    }
}
