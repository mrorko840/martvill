<?php
/**
 * @package ProductRelate
 * @author TechVillage <support@techvill.org>
 * @contributor Sakawat Hossain Rony <[sakawat.techvill@gmail.com]>
 * @created 16-10-2021
 */
namespace App\Models;

use App\Rules\CheckDuplicateProduct;
use App\Models\Model;
use Validator;

class ProductRelate extends Model
{
    public $timestamps = false;

    protected $fillable = ['product_id','related_product_id'];

    protected $table = 'product_relates';

    /**
     * Foreign key with Product model
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function product()
    {
        return $this->belongsTo('App\Models\Product', 'product_id');
    }

    /**
     * Foreign key with Product model
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function relatedProduct()
    {
        return $this->belongsTo('App\Models\Product', 'related_product_id');
    }

    /**
     * Update Validation
     *
     * @param $data
     * @param $id
     * @return mixed
     */
    protected static function storeValidation($data = [], $id = null)
    {
        $validator = Validator::make($data, [
            'related_product_id' => ['required', new CheckDuplicateProduct('relate', $id)],
        ]);

        return $validator;
    }

    /**
     * Store
     *
     * @param $data
     * @return false
     */
    public function store($data = [])
    {
        if (parent::insert($data)) {
            self::forgetCache();
        }

        return false;
    }

    /**
     * Update Product Relate
     *
     * @param array $data
     * @param null $id
     * @return bool
     */
    public function updateProductRelated($data = [], $id = null)
    {
        $result = parent::where('product_id', $id);

        if ($result->exists()) {
            $result->update($data);
            self::forgetCache();
            return true;
        }

        return false;
    }

    /**
     * Delete
     *
     * @param $id
     * @param $relatedId
     * @return array
     */
    public function remove($id = null, $relatedId = null)
    {
        $data = ['status' => 'fail', 'message' => __('Something went wrong, please try again.')];
        $record = parent::where('product_id', $id)->where('related_product_id', $relatedId);

        if ($record->exists()) {
            try {
                $record->delete();
                self::forgetCache();
                $data['status'] = 'success';
                $data['message'] = __('The :x has been successfully deleted.', ['x' => __('Related Products')]);
            } catch (Exception $e) {
                $data['message'] = $e->getMessage();
            }
        }

        return $data;
    }
}
