<?php
/**
 * @package ProductFilter
 * @author TechVillage <support@techvill.org>
 * @contributor AH Millat <[millat.techvill@gmail.com]>
 * @created 24-03-2022
 */

namespace App\Filters;

use App\Filters\Filter;
class VendorProductFilter extends Filter
{
    /**
     * set the rules of query string
     *
     * @var array
     */
    protected $filterRules = [
        'status' => 'in:Active,Inactive,Pending',
        'brand' => 'int',
        'category' => 'int'
    ];

    /**
     * filter status  query string
     *
     * @param string $status
     * @return query builder
     */
    public function status($status)
    {
        return $this->query->where('status', $status);
    }

    /**
     * filter by brand  query string
     *
     * @param int $id
     * @return query builder
     */
    public function brand($id)
    {
        return $this->query->whereHas('brand', function ($query) use ($id){
            $query->where('id', $id);
        });
    }

    /**
     * filter by category  query string
     *
     * @param int $id
     * @return query builder
     */
    public function category($id)
    {
        return $this->query->whereHas('category', function ($query) use ($id) {
            $query->where('category_id', $id);
        });
    }

    /**
     * filter by search  query string
     *
     * @param string $value
     * @return query builder
     */
    public function search($value)
    {
        $value = xss_clean($value['value']);

        return $this->query->where(function ($query) use ($value) {
            $query->WhereLike('name', $value)
                ->OrWhereLike('code', $value)
                ->OrWhereLike('sku', $value)
                ->OrWhereLike('status', $value)
                ->OrWhereLike('price', $value)
                ->orWhereHas('category', function ($query) use ($value) {
                    $query->WhereLike('name', $value);
                })
                ->orWhereHas('brand', function ($query)use($value) {
                    $query->WhereLike('name', $value);
                });
        });
    }

    /**
     * filter by order  query string
     *
     * @param string $value
     * @return query builder
     */
    public function order($value)
    {
        if ($value[0]['dir'] == 'asc' || $value[0]['dir'] == 'desc') {
            return $this->query->with(['brand', 'ProductCategory']);
        }

        return $this->query->orderBy('id', 'DESC')->with(['brand', 'ProductCategory']);
    }
}
