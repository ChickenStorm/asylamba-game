<?php

/**
 * RecyclingMission
 *
 * @author Jacky Casas
 * @copyright Asylamba
 *
 * @package Zeus
 * @update 09.02.15
 */

class RecyclingMission {

	const ST_DELETED = 0;
	const ST_ACTIVE = 1;

	public $id = 0;
	public $rBase = 0;
	public $rTarget = 0;
	public $cycleTime = 0;
	public $recyclerQuantity = 0;
	public $uRecycling = '';
	public $statement = 1;

	public function getId()	{ return $this->id; }
}