<?php namespace cobaoctober\Movies\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateCobaoctoberMoviesMoviesComments extends Migration
{
    public function up()
    {
        Schema::create('cobaoctober_movies_movies_comments', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('movie_id')->unsigned();
            $table->integer('comment_id')->unsigned();
            $table->primary(['movie_id','comment_id']);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('cobaoctober_movies_movies_comments');
    }
}
