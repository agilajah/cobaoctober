<?php namespace cobaoctober\Movies\Models;

use Model;

/**
 * Model
 */
class Actor extends Model
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
    public $table = 'cobaoctober_movies_actors';

    // Relations

    public $belongsToMany = [

        'movies' => [
            'cobaoctober\Movies\Models\Movie',
            'table' => 'cobaoctober_movies_movies_actors',
            'order' => 'name'
          ]
    ];

    public $attachOne = [
        'actorimage' => 'System\Models\File'
    ];

    public function getFullNameAttribute(){
      return $this->name . " " . $this->lastname;
    }
}
