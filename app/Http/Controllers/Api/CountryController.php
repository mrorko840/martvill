<?php

namespace App\Http\Controllers\Api;
/**
 * @package CountryController
 * @author TechVillage <support@techvill.org>
 * @contributor Al Mamun <[almamun.techvill@gmail.com]>
 * @created 04-04-2022
 */
use App\Http\Controllers\Controller;
use App\Models\Country;
use Illuminate\Http\Request;

class CountryController extends Controller
{
    /**
     * Country List
     *
     * @param Request $request
     * @return json $data
     */
    public function index(Request $request)
    {
        return $this->response(Country::getAll());
    }
}
