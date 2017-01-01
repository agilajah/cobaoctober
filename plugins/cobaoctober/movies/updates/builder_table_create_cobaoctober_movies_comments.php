<?php namespace cobaoctober\Movies\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateCobaoctoberMoviesComments extends Migration
{
    public function up()
    {
        Schema::create('cobaoctober_movies_comments', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('comment_id')->unsigned();
            $table->string('writer')->nullable();
            $table->text('content');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('cobaoctober_movies_comments');
    }
}
