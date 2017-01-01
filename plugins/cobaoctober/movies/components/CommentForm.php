<?php namespace cobaoctober\Movies\Components;

use Cms\Classes\ComponentBase;

use Input;

use Validator;

use Redirect;

use Flash;

use cobaoctober\Movies\Models\Comment;

use cobaoctober\Movies\Models\Movie;

use Carbon\Carbon;

class CommentForm extends ComponentBase {
	public function componentDetails() {
		return [
			'name' => 'Comment Form',
			'description' => 'Enter comment'
		];
	}


	public function onSave() {

		$comment = new Comment();

		$comment->movie_id = Input::get('movie_id');

		$comment->writer = Input::get('writer');

		$comment->content = Input::get('content');

		$comment->timestamp = Carbon::now();

		$comment->save();

		Flash::success('Comment added!');

		return Redirect::back();


	}
}