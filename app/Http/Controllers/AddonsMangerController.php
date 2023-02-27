<?php
/**
 * @package AddonsMangerController
 * @author TechVillage <support@techvill.org>
 * @contributor Sakawat Hossain Rony <[sakawat.techvill@gmail.com]>
 * @created 19-01-2022
 */
namespace App\Http\Controllers;

class AddonsMangerController extends Controller
{
    /**
     * All orders
     *
     * @return mixed
     */
    public function index()
    {
        $data['available'] = miniCollection(json_decode(file_get_contents("Modules/Addons/available_addons.json"), true));
        return view('admin.addons.index', $data);
    }
}
