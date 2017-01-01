<?php namespace cobaoctober\Movies\Models;

use Model;

/**
 * Model
 */
class Comment extends Model
{
    use \October\Rain\Database\Traits\Validation;

    /*
     * Validation
     */
    public $rules = [
    ];

    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;

    /**
     * @var string The database table used by the model.
     */
    public $table = 'cobaoctober_movies_comments';

    // public function getWriterAttribute(){
    //     return $this->writer;
    // }

    // public function getContentAttribute(){
    //     return $this->content;
    // }

}