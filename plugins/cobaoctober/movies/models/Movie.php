<?php namespace cobaoctober\Movies\Models;

use Model;

/**
 * Model
 */
class Movie extends Model
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
    public $table = 'cobaoctober_movies_';

    protected $jsonable = ['actors'];

    /* Relations */

    public $belongsToMany = [
      'genres' => [
          'cobaoctober\Movies\Models\Genre',
          'table' => 'cobaoctober_movies_movies_genres',
          'order' => 'genre_title'
        ]
    ];

    public $attachOne = [
      'poster' => 'System\Models\File'
    ];

    public $attachMany = [
      'movie_gallery' => 'System\Models\File'
    ];


}
