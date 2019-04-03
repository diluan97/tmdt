<?php

namespace App\Models\Products;

use Illuminate\Database\Eloquent\Model;
use App\Helpers\BeautyLink;
use App\Helpers\SearchTrait;
use Auth;

class ProductVariant extends Model
{

    use BeautyLink, SearchTrait;
    public static $urlAdminEdit = 'admin_product_variant.edit';
    public static $urlAdminShow = 'admin_product_variant.show';
    public static $urlAdminDestroy = 'admin_product_variant.destroy';
    public static $urlAdminUpdate = 'admin_product_variant.update';

    protected $fillable = [
        'product_id',
        'color',
        'size',
        'price',
        'amount',
        'status',
        'position',
    ];

    public function orders()
    {
        return $this->belongsToMany('App\Models\Order', 'product_order')->withPivot('amount');
    }

    public function urlAdminEdit($slug)
    {
        return route(self::$urlAdminEdit, ['product_slug' => $slug, 'id' => $this->id]);
    }
    public function urlAdminDestroy($slug)
    {
        return route(self::$urlAdminDestroy, ['slug' => $slug, 'id' => $this->id]);
    }

    public function urlAdminUpdate($slug)
    {
        return route(self::$urlAdminUpdate, ['product_slug' => $slug, 'id' => $this->id]);
    }
    public function product()
    {
        return $this->belongsTo('App\Models\Products\Product');
    }
    public function getSize(){
        if($this->size == 1){
            echo "[ Size Nhỏ ]";
        }else if($this->size == 0){
            echo "[ Size Lớn ]";
        }else{
            echo " ";
        }
    }
    public function getSizeGuest()
    {
        if ($this->size == 1) {
            echo "- Nhỏ ";
        } else if($this->size == 0){
            echo "- Lớn ";
        }else{
            echo "";
        }
    }
    public  function getAmount(){
        if($this->amount >0){
            echo " Còn Hàng";
        }else{
            echo " Hết Hàng";
        }
    }
    public function getName()
    {
        $string = $this->product->name;
        if ($this->size != null)
            $string .= $this->getSize();
        return $string;
    }

    public function getStatus()
    {
        if ($this->status == 1)
            echo "Publish";
        elseif ($this->status == 0)
            echo "Draff";
    }
    public function countAmountOrderWaiting()
    {
        $orders = $this->orders()->where('order_status', 'W')->get();
        $total = 0;
        if (count($orders)) {
            foreach ($orders as $order) {
                $total += $order->pivot->amount;
            }
        }
        return $total;
    }
    public function getPrice()
    {
        $auth = Auth::check();
        if($auth && Auth()->user('role',1)){
            $price = $this->price;
            return number_format($price)." Vnđ";
        }else if($this->position == 0){
            $price = $this->price;
            return number_format($price) . " Vnđ";
        }return "Liên Hệ";
    }

    public function getInStock(){
        if($this->amount > 0){
            return "Còn Hàng";
        }
        return "Hết Hàng";
    }

    public function getPriceCart()
    {
        $auth = Auth::check();
        if ($auth && Auth()->user('role', 1)) {
            $price = $this->price;
            return $price;
        } else if ($this->position == 0) {
            $price = $this->price;
            return $price;
        }
        return 0;
    }
}
