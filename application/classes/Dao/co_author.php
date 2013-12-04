<?php defined('SYSPATH') or die('No direct script access.');

class Dao_author {

	public function createnew($author_id, $author)
	{
		$author = ORM::factory('author');
		$author->author_id = $author_id;
		$author->author_name = $author;
		$author->save();

		return $author->pk();
	}

}