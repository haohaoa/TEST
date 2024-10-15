<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
class ProductDetail extends Model
{
    use HasFactory;
    protected $table = 'product_details';
    protected $fillable = ['product_id','link'];
    public static function getProductDetailById($product_id)
    {
        // Sử dụng $id để lấy sản phẩm từ cơ sở dữ liệu
        $detail = self::where('product_id', $product_id)->get();
        return $detail;
    }
    

    public static function addIMGProductDetail($data)
    {
        return static::create($data);
    }


    
    public static function deleteProduct($id)
    {
        // Tìm sản phẩm cần xóa
        $product_details= ProductDetail::getProductDetailById($id);
    
        if (!$product_details) {
            return false; // Trả về false nếu không tìm thấy sản phẩm
        }
    
        // Xóa các file hình ảnh liên quan nếu tồn tại
        foreach ($product_details as $sp) {
            Storage::delete('ruiz/assets/images/product/' . $sp->link);
            // Xóa file hình ảnh trong thư mục lưu trữ
        }
        // Xóa sản phẩm từ cơ sở dữ liệu
        $deleted = ProductDetail::where('product_id', $id)->delete();
    
        return true; // Trả về true nếu xóa thành công, ngược lại trả về false
    }
}
