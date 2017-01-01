<?php namespace cobaoctober\Movies\Components;

use Cms\Classes\ComponentBase;

use Input;

use Validator;

use Redirect;

use Flash;

use cobaoctober\Movies\Models\Movie;

use Carbon\Carbon;

class MovieForm extends ComponentBase {
	public function componentDetails() {
		return [
			'name' => 'Movie Form',
			'description' => 'Enter Movie'
		];
	}


	// public function onRun() {
	// 	//Build a back-end form with the context of 'frontend'
	// 	$formController = new \cobaoctober\Movies\Controllers\Movies();


	// 	// form's assets loading
 //        $this->addJs('/modules/system/assets/js/framework.extras.js', 'core');
 //        $this->addJs('/modules/backend/assets/js/october-min.js', 'core');
 //        $this->addCss('/modules/backend/assets/css/october.css', 'core');
 //        $this->addCss('/modules/backend/assets/css/controls.css', 'core');

 //        $formController->create('frontend');

	// 	//Append the formController to the page
 //        $this->page['form'] = $formController;
 //        foreach ($formController->getAssetPaths() as $type => $assets) {
 //            foreach ($assets as $asset){
 //                $this->{'add' . ucfirst($type)}($asset);
 //            }
 //        }

		

	// }

	public function onSave() {

		$Movie = new Movie();

		$Movie->name = Input::get('name');

		$Movie->description = Input::get('description');

		$Movie->year = Input::get('year');

		$Movie->slug = Input::get('slug');

		$Movie->poster = Input::file('movieposter');

		$Movie->save();

		Flash::success('Movie added! You can add additional information later.');

		return Redirect::back();


	}
}