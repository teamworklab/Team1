<?php defined('SYSPATH') or die('No direct script access.');

class Dao_Attendee {

	public function create($user_id, $conference_id)
	{
		$attendee = ORM::factory('Attendee');

		$attendee->user = $user_id;
		$attendee->conference = $conference_id;

		$attendee->save();
		return $attendee->pk();
	}

	public function get_attendee_list($conference_id)
	{
		$attendees = ORM::factory('Attendee')
						->where('conference', '=', $conference_id)
						->find_all();

		return $attendees;
	}

	public function delete($user_id, $conference_id)
	{
		$query = DB::delete('attendee')
					->where('user', '=', $user_id)
					->where('conference', '=', $conference_id);

		$query->execute();
	}
}