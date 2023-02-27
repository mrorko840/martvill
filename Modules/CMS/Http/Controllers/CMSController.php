<?php

/**
 * @package ShippingController
 * @author TechVillage <support@techvill.org>
 * @contributor Kabir Ahmed <[kabir.techvill@gmail.com]>
 * @created 27-12-2021
 */

namespace Modules\CMS\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Modules\CMS\DataTables\PageDataTable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\CMS\Entities\Page as EntitiesPage;

use Modules\CMS\Http\Requests\{
    PageRequest, PageUpdateRequest
};
use Modules\CMS\Http\Models\{
    Page, ThemeOption
};
use Session;

class CMSController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index(PageDataTable $dataTable)
    {
        $pages = Page::where('type', '!=', 'home')->get();
        return view('cms::index', compact('pages'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        $data['layouts'] = ThemeOption::layouts();
        return view('cms::create', $data);
    }


    /**
     * Create Homepage Form
     * @return Renderable
     */
    public function createHomepage()
    {
        $data['layouts'] = ThemeOption::layouts();
        $data['isHome'] = true;
        return view('cms::create', $data);
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(PageRequest $request)
    {
        $data = ['status' => 'fail', 'message' => __('Invalid Request')];
        $id = (new Page)->store($request->only('name', 'slug', 'status', 'type', 'default', 'layout', 'meta_title', 'meta_description'));

        if ($id) {
            $data['status'] = 'success';
            $data['message'] = __('The :x has been successfully saved.', ['x' => __('Page')]);
        }

        Session::flash($data['status'], $data['message']);
        if ($request->type == 'home') {
            return redirect()->route('page.home');
        }
        return redirect()->route('page.index');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($slug)
    {
        $data['page'] = Page::whereSlug($slug)->first();
        $data['layouts'] = ThemeOption::layouts();
        return view('cms::edit', $data);
    }

    public function editHome($slug)
    {
        $data['page'] = Page::whereSlug($slug)->first();
        $data['layouts'] = ThemeOption::layouts();
        $data['isHome'] = true;
        return view('cms::edit', $data);
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(PageUpdateRequest $request, $id)
    {
        $data = ['status' => 'fail', 'message' => __('Invalid Request')];

        if ($request->default) {
            $request->status = 'Active';
        }
        if ((new Page)->updatePage($request->only('name', 'slug', 'status', 'default', 'layout', 'meta_title', 'meta_description'), $id)) {
            if ($request->default == 1) {
                (new Page)->updateDefault($id);
            }
            $data['status'] = 'success';
            $data['message'] = __('The :x has been successfully saved.', ['x' => __('Page')]);
        }
        $page = Page::find($id);

        Session::flash($data['status'], $data['message']);

        if ($page->type == 'home') {
            return redirect()->route('page.home');
        }
        return redirect()->route('page.index');
    }


    public function quickUpdate(Request $request, $id)
    {
        $data = ['status' => 'fail', 'message' => __('Invalid Request')];

        $page = EntitiesPage::find($id);

        if (!$page) {
            $data['status'] = 'fail';
            $data['message'] = __('Page not found.');
            return redirect()->back();
        }

        $updateFieldArray = ['name', 'slug', 'status'];

        if ($page->default <> 1 && $request->default == 1) {
            array_push($updateFieldArray, 'default');
            EntitiesPage::home()->update(['default' => 0]);
        }

        if ($page->default == 1) {
            $request->request->add(['status' => 'Active']);
        }

        $page->update($request->only($updateFieldArray));

        $data['status'] = 'success';

        $data['message'] = __('The :x has been successfully saved.', ['x' => __('Page')]);

        Session::flash($data['status'], $data['message']);

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function delete($id)
    {
        $page = Page::find($id);
        if ($page->default == 1) {
            $data['status'] = 'fail';
            $data['message'] = __('Cannot delete default page.');
            return redirect()->back();
        }
        $response = (new Page)->remove($id);
        Session::flash($response['status'], $response['message']);
        return redirect()->back();
    }

    public function theme()
    {
        return view('cms::theme');
    }


    /**
     * Home pages list
     * @return Renderable
     */
    public function home()
    {
        $data['pages'] = Page::where('type', 'home')->get();
        return view('cms::home', $data);
    }
}
