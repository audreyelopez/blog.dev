<?php

use Carbon\Carbon;

class BaseModel extends Eloquent
{
	// accessor for 'created_at' and 'updated_at' attributes 
	// to convert from local time to UTC on each post
	public function getCreatedAtAttribute($value)
	{
	    $utc = Carbon::createFromFormat($this->getDateFormat(), $value);

	    return $utc->setTimezone('America/Chicago');

	}

	public function getUpdatedAtAttribute($value)
	{
	    $utc = Carbon::createFromFormat($this->getDateFormat(), $value);

	    return $utc->setTimezone('America/Chicago');

	}

}

