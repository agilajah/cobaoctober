<?php namespace cobaoctober\Movies\Components;

use Cms\Classes\ComponentBase;
use cobaoctober\Movies\Models\Comment;
use cobaoctober\Movies\Models\Movie;

class Comments extends ComponentBase {

  public function componentDetails() {
    return [
        'name' => 'Comment list',
        'description' => 'List of comment'
      ];
  }

  public function defineProperties() {
    return [
        'results' => [
            'title' => 'Number of comments',
            'description' => 'How many comments do you want to display?',
            'default' => 0,
            'validationPattern' => '^[0-9]+$',
            'validationMessage' => 'Only numbers allowed'
        ],

        'sortOrder' => [
            'title' => 'Sort comments',
            'description' => 'Sort those actors in database',
            'type' => 'dropdown',
            'default' => 'timestamp asc'
        ]
    ];
  }

  public function getSortOrderOptions() {
    return [
        'timestamp asc' => 'Latest comment (ascending)',
        'timestamp desc' => 'Oldest comment (descending)'
      ];
  }


  public function onRun() {
    $this->comments = $this->loadComments();
  }

  
  
  protected function loadComments() {
    $query = Comment::all();



    if ($this->property('sortOrder') == 'timestamp asc' ) {
      $query = $query->sortBy('timestamp');
    } else {
      $query = $query->sortByDesc('timestamp');
    }


    if ($this->property('results') > 0) {
      $query = Comment::all()->take($this->property('results'));
    }

    return $query;
  }


  public $comments;
}
