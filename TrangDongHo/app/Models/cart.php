<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cart extends Model
{
    use HasFactory;
    protected $table = 'carts';
    protected $fillable= ['name','link','user_id','quantity','money','product_id'];

    public static function getCartUserID($id){
         $allcart = self::where('user_id',$id)->get();
         return $allcart;
    }
    public static function addtocart($name,$link,$user_id,$money,$quantity,$product_id){
        return self::create([
            'name'=> $name,
            'link'=> $link,
            'user_id'=> $user_id,
            'money' =>$money,
            'quantity'=> $quantity,
            'product_id'=> $product_id,
        ]);
    }
    public static function deleteCart($id){
        // Sử dụng phương thức destroy() (xóa một bản ghi)
        return Cart::destroy($id);
    
        // Hoặc sử dụng phương thức delete() (xóa một bản ghi)
        // $cart = YourModelName::find($id);
        // if ($cart) {
        //     return $cart->delete();
        // }
        // return false;
    }
    public static function deleteUserCart($id)
    {
    // Lấy tất cả các bản ghi có id_user là $id, sau đó xóa chúng
    return Cart::where('user_id', $id)->delete();
}

    
}
