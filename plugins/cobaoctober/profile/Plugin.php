<?php namespace cobaoctober\Profile;

use System\Classes\PluginBase;

use Rainlab\User\Controllers\Users as UserController;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
    }

    public function registerSettings()
    {
    }

    public function boot() {
    	UserController::extendFormFields(function($form, $model, $context){
    		$form->addTabFields([
    				'facebook' => [
    					'label' => 'Facebook',
    					'type' => 'text',
    					'tab' => 'Profile'
    				],

    				'bio' => [
    					'label' => 'Biography',
    					'type' => 'textarea',
    					'tab' => 'Profile'
    				]

    			]);
    	}); 
    }
}
