<?php namespace cobaoctober\Movies\Components;

use Cms\Classes\ComponentBase;

use Input;

use Validator;

use Redirect;

use Flash;

use cobaoctober\Movies\Models\Actor;

class ActorForm extends ComponentBase {
	public function componentDetails() {
		return [
			'name' => 'Actor Form',
			'description' => 'Enter actors'
		];
	}


	public function onSave() {

		$actor = new Actor();

		$actor->name = Input::get('name');

		$actor->lastname = Input::get('lastname');

		$actor->actorimage = Input::file('actorimage');

		$actor->save();

		Flash::success('Actor added!');

		return Redirect::back();


	}
}