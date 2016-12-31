<?php namespace cobaoctober\Movies;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
      return [
        'cobaoctober\Movies\Components\Actors' => "actors",
        'cobaoctober\Movies\Components\ActorForm' => "actorform"
      ];
    }

    public function registerFormWidgets() {
      return [
          'cobaoctober\Movies\FormWidgets\ActorBox' => [
              'label' => 'Actorbox field',
              'code' => 'actorbox'
            ]
        ];
    }

    public function registerSettings()
    {
    }
}
