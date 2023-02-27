<?php

/**
 * @package ProductController
 * @author TechVillage <support@techvill.org>
 * @contributor Al Mamun <[almamun.techvill@gmail.com]>
 * @created 29-01-2022
 */

namespace App\Http\Controllers\Api\User;

use App\Filters\ProductSearchFilter;
use App\Http\Controllers\Controller;
use App\Http\Resources\{
    ProductDetailResource,
    ProductFilterResource,
    ProductResource,
    RecentSearchResource,
    RelatedProductResource
};
use App\Models\{Product, ProductRelate, Search, UserSearch};
use App\Services\Actions\Facades\ProductActionFacade;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use DB;

class ProductController extends Controller
{
    /**
     * Product catelogs
     *
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\RedirectResponse
     */
    public function search(Request $request)
    {
        $rowPerPage = isset($request->showing) && !empty($request->showing) && is_numeric($request->showing) ? $request->showing : 12;
        $products = Product::whereNull('parent_id')->with(['category', 'brand', 'variations']);
        $products = $products->select('products.*');

        if (isset($request->related_ids)) {
            $decodeRelatedIds = json_decode(urldecode($request->related_ids));

            if (is_array($decodeRelatedIds) && count($decodeRelatedIds) > 0) {
                $products = $products->whereIn('id', $decodeRelatedIds);
            }
        }

        $products = $products->filter(ProductSearchFilter::class);
        $productResource = new ProductFilterResource($products);
        $userId = null;

        if (isset(auth()->guard('api')->user()->id)) {
            $userId = auth()->guard('api')->user()->id;
        } elseif (isset($request->user_id)) {
            $userId = $request->user_id;
        }
        $request['user_id'] = $userId;

        if (isset($request->keyword) && !empty($request->keyword)) {

            try {
                DB::beginTransaction();
                $searchId = (new Search)->store(['name' => $request->keyword]);
                (new UserSearch)->store(['search_id' => $searchId, 'user_id' => $userId != 0 ? $userId : null, 'browser_agent' => getUniqueAddress()]);
                DB::commit();
            } catch (Exception $e) {
                DB::rollBack();
            }
        }

        $response = $this->response([
            'data' => ProductResource::collection($productResource->query()->paginate($rowPerPage)),
            'filterable' => $productResource->getFilters(),
            'filter_applied' => $productResource->getAppliedFilters(),
            'category_path' => $productResource->categoryPath,
            'pagination' => $this->toArray($productResource->query()->paginate($rowPerPage))
        ]);

        if (isset($request->from) && $request->from == 'web') {
            $data['response'] = $response->getData();
            return view('site.filter.result', $data);
        }

        return $response;
    }

    /**
     * recent search
     *
     * @param Request $request
     * @return void
     */
    public function recentSearch(Request $request)
    {
        $configs = $this->initialize([], $request->all());
        if (isset(auth()->guard('api')->user()->id)) {
            $userId = auth()->guard('api')->user()->id;
            $result = UserSearch::select("searches.id", "searches.name",)
                ->leftJoin("searches", "searches.id", "=", "user_searches.search_id")
                ->where("user_searches.user_id", auth()->guard('api')->user()->id);
        } else {
            $browserAgent = getUniqueAddress();
            $result = UserSearch::select("searches.id", "searches.name",)
                ->leftJoin("searches", "searches.id", "=", "user_searches.search_id")
                ->where("user_searches.browser_agent", $browserAgent);
        }

        return $this->response([
            'data' => RecentSearchResource::collection($result->paginate($configs['rows_per_page'])),
            'pagination' => $this->toArray($result->paginate($configs['rows_per_page'])->appends($request->all()))
        ]);
    }
    /**
     * Get Product details
     * @param Request $request
     * @return ProductDetailResource
     */
    public function productDetails(Request $request)
    {
        $product = ProductActionFacade::execute('getProductWithAttributeAndVariations', $request);
        if (!$product) {
            return $this->notFoundResponse([], __('Product not found.'));
        }
        return new ProductDetailResource($product);
    }


    /**
     * BestSeller/Popular/Featured etc products
     * @param string $type
     * @param Request $request
     * @return JsonResponse
     */
    public function categorizedProduct($type, Request $request)
    {
        $limit = $request->limit;

        $arrayKeys = array_keys(Product::productCategoryOptions());

        $position = array_search(strtolower($type), array_map('strtolower', $arrayKeys));

        if ($position === false) {
            return $this->unprocessableResponse([], __('Invalid type of product category'));
        }

        $method = $arrayKeys[$position];

        $products = Product::$method($limit);

        return $this->okResponse(['data' => ProductResource::collection($products)]);
    }

    /**
     * all related products
     *
     * @param Request $request
     * @return array|JsonResponse
     */
    public function relatedProducts(Request $request)
    {
        $configs = $this->initialize([], $request->all());
        $result = ProductRelate::where('product_id', $request->id);

        return $this->response([
            'data' => RelatedProductResource::collection($result->paginate($configs['rows_per_page'])),
            'pagination' => $this->toArray($result->paginate($configs['rows_per_page'])->appends($request->all()))
        ]);
    }
}
