<?php namespace cobaoctober\Movies\Components;

use Cms\Classes\ComponentBase;
use cobaoctober\Movies\Models\Actor;

class Actors extends ComponentBase {
  public function componentDetails() {
    return [
        'name' => 'Actor list',
        'description' => 'List of actors'
      ];
  }


  public function onRun() {
    $this->actors = $this->loadActors();
  }
  protected function loadActors() {
    return Actor::all();
  }


  public $actors;
}
