<?php namespace cobaoctober\Movies;

use System\Classes\PluginBase;

use cobaoctober\Movies\Models\Movie as movieModel;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
      return [
        'cobaoctober\Movies\Components\Actors' => "actors",
        'cobaoctober\Movies\Components\ActorForm' => "actorform",
        'cobaoctober\Movies\Components\Comments' => "comments",
        'cobaoctober\Movies\Components\CommentForm' => "commentform",
        'cobaoctober\Movies\Components\MovieForm' => "movieform"
      ];
    }

    public function registerFormWidgets() {
      return [
          'cobaoctober\Movies\FormWidgets\ActorBox' => [
              'label' => 'Actorbox field',
              'code' => 'actorbox'
            ],
              'Backend\FormWidgets\RichEditor' => [
              'label' => 'Rich editor',
              'code'  => 'richeditor'
            ],

            'Backend\FormWidgets\FileUpload' => [
                'label' => 'File uploader',
                'code'  => 'fileupload'
            ],

            'Backend\FormWidgets\Relation' => [
                'label' => 'Relationship',
                'code'  => 'relation'
            ],
            
            'Backend\FormWidgets\Repeater' => [
                'label' => 'Repeater',
                'code'  => 'repeater'
            ],

            'Backend\FormWidgets\TagList' => [
                'label' => 'Tag List',
                'code'  => 'taglist'
            ]
        ];
    }

    public function registerSettings()
    {
    }

    public function boot() {

        movieModel::extend(function($model){
            $model->addFillable([
              'movie_id'
            ]);

          });
    }
}
