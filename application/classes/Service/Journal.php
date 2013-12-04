<?php defined('SYSPATH') or die('No direct script access.');

class Service_Journal {

	public function get_journal_list($user_id, $recent_first = FALSE)
	{
		$journal_dao = new Dao_Journal();
		$results = $journal_dao->get_by_user_id($user_id, $recent_first);

		$journals = array();

		foreach ($results as $result) 
		{
			$journal = array();

				$username = new Dao_Journal();
				$user = $username->get_last_author($result->get('id'));
				
				foreach ($user as $val)
				{
					$author_names = $val['author_name'];
				}
			
			$journal['first_name'] = $author_names;
			$journal['year'] = $result->get('title');
			$journal['journal'] = $result->get('journal');
			$journal['title'] = $result->get('title');
			$journal['volume'] = $result->get('volume');
			$journal['issue'] = $result->get('issue');
			$journal['start'] = $result->get('start_page');
			$journal['end'] = $result->get('end_page');

			array_push($journals, $journal);
		}

		return $journals;
	}

	public function get_journal_list_for_display($user_id, $recent_first = FALSE)
	{
		$results = $this->get_journal_list($user_id, $recent_first);

		$journals = array();

		foreach ($results as $result) 
		{
			$journal = Util_Journal::format($result['first_name'],
											$result['year'],
											$result['title'],
											$result['journal'],
											$result['volume'],
											$result['issue'],
											$result['start'],
											$result['end']);

			array_push($journals, $journal);
			
		}

		return $journals;
	}
}