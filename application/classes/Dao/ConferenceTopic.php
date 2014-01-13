<?php defined('SYSPATH') or die('No direct script access.');

class Dao_ConferenceTopic {

	public function create($title, $content, $conference_id, $user_id)
	{
		$topic = ORM::factory('ConferenceTopic');

		$topic->conference = $conference_id;
		$topic->title = $title;
		$topic->content = $content;
		$topic->created_by = $user_id;
		$topic->created_date = time();

		$topic->save();
		return $topic->pk();
	}

	public function get_topic_list_with_author($conference_id)
	{
		$sql = 'SELECT c.id, c.conference, c.title, c.content, c.created_date, u.id AS user_id, u.firstname, u.lastname FROM conference_topic c '
				.'LEFT OUTER JOIN user u ON c.created_by = u.id '
				.'WHERE c.conference = '.$conference_id;

		return DB::query(Database::SELECT, $sql)
					->execute()
					->as_array();
	}

	public function get_with_author($id)
	{
		$sql = 'SELECT c.id, c.conference, c.title, c.content, c.created_date, u.id AS user_id, u.firstname, u.lastname FROM conference_topic c '
				.'LEFT OUTER JOIN user u ON c.created_by = u.id '
				.'WHERE c.id = '.$id;

		return DB::query(Database::SELECT, $sql)
					->execute()
					->as_array()[0];
	}
}