<?php
/**
 * @package SubscriberFilter
 * @author TechVillage <support@techvill.org>
 * @contributor Al Mamun <[almamun.techvill@gmail.com]>
 * @created 28-04-2022
 */

namespace Modules\Newsletter\Filters;

use App\Filters\Filter;

class SubscriberFilter extends Filter
{
    /**
     * set the rules of query string
     *
     * @var array
     */
    protected $filterRules = [
        'status' => 'in:Active,Inactive'
    ];

    /**
     * filter status query string
     *
     * @param string $status
     * @return query builder
     */
    public function status($status)
    {
        return $this->query->where('status', $status);
    }

    /**
     * filter by search query string
     *
     * @param string $value
     * @return query builder
     */
    public function search($value)
    {
        $value = xss_clean($value['value']);
        if (!empty($value)) {
            return $this->query->where(function ($query) use ($value) {
                $query->WhereLike('email', $value)
                    ->OrWhereLike('status', $value);
            });
        }
    }

}
