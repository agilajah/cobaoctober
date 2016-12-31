<?php namespace cobaoctober\Contact;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
    	return [
    		'cobaoctober\Contact\Components\ContactForm' => 'contactform' 
    	];
    }

    public function registerSettings()
    {
    }
}
