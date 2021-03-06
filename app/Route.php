<?php

namespace App;

class Route
{
	private $item_id;
	private $gender;

	public function __construct($item_id, $gender)
	{
		$this->item_id = $item_id;
		$this->gender = $gender;
	}

	public function getAddPageUrl()
	{
		return "http://couple-housekeeping.herokuapp.com/add.php?item=$this->item_id&gender=$this->gender";
	}

	public function getShowPageUrl()
	{
		return "http://couple-housekeeping.herokuapp.com/show.php?item=$this->item_id&gender=$this->gender";
	}
}
