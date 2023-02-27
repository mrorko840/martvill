<?php
/**
 * @package FormattedDate
 * @author TechVillage <support@techvill.org>
 * @contributor Millat <[millat.techvill@gmail.com]>
 * @created 06-09-2021
 */

namespace App\Traits\ModelTraits;

trait FormatDateTime
{
	/**
	 * format_created_at attribute
	 * @return null|string
	 */
    public function getFormatCreatedAtAttribute()
    {
    	return array_key_exists('created_at', $this->attributes)
	    	? $this->formatDateTime($this->attributes['created_at'])
	    	: null;
    }

	/**
	 * format_updated_at attribute
	 * @return null|string
	 */
    public function getFormatUpdatedAtAttribute()
    {
    	return array_key_exists('updated_at', $this->attributes)
	    	? $this->formatDateTime($this->attributes['updated_at'])
	    	: null;
    }

    /**
	 * format Date & Time
	 * @param  [type] $date [description]
	 * @return [type]       [description]
	 */
	protected function formatDateTime($date)
	{
		return timeZoneFormatDate($date) . ' ' . timeZoneGetTime($date);
	}
}
