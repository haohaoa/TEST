<?php

namespace App\Models;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'product';
    protected $fillable = ['name','link','color','money','description','hot','created_at','updated_at','_token','loai','quantyti'];
    protected $primaryKey = 'product_id';
    //lấy tất cả sản phảm
    public static function GetAllProduct(){
        return self::all();
    }
    
    public static function getProductById($product_id)
    {
        // Sử dụng $id để lấy sản phẩm từ cơ sở dữ liệu
        $product = self::where('product_id', $product_id)->first();
        return $product;
    }
    //lấy dử liêu bằng name
    public static function getnameProduct($search){
        return static::where('name', 'like', '%' . $search . '%')->get();
    } 
    public static function addProduct($data)
    {
        return static::create($data);
    }

    public static function updateProduct($id, $data)
    {
        // Tìm sản phẩm cần cập nhật trong cơ sở dữ liệu
        $product = self::where('product_id', $id)->first();
        
        // Kiểm tra xem sản phẩm có tồn tại không
        if (!$product) {    
            return false; // Trả về false nếu không tìm thấy sản phẩm
        }
        // Cập nhật dữ liệu của sản phẩm từ dữ liệu được gửi từ form
        $product->fill($data)->save();
    
        // Trả về true nếu cập nhật thành công
        return true;
    }
  
    public static function updateQuantity($id, $newQuantity){
        // Tìm đơn hàng cần cập nhật
       $product= product::getProductById($id);
       
       // Kiểm tra xem đơn hàng có tồn tại không
       if ($product) {
           // Cập nhật trạng thái của đơn hàng thành đã xem
           $product->quantyti = $newQuantity;
           $product->save();
           return true;
       }
       
       // Trả về false nếu không tìm thấy đơn hàng cần cập nhật
       return false;
    }
    public static function deleteProduct($id)
    {
        // Tìm sản phẩm cần xóa
        $product = Product::find($id);
    
        if (!$product) {
            return false; // Trả về false nếu không tìm thấy sản phẩm
        }
    
        // Xóa các file hình ảnh liên quan nếu tồn tại
        if ($product->link) {
            Storage::delete('ruiz/assets/images/product/' . $product->link);
            // Xóa file hình ảnh trong thư mục lưu trữ
        }
    
        // Xóa sản phẩm từ cơ sở dữ liệu
        $deleted = $product->delete();
    
        return $deleted; // Trả về true nếu xóa thành công, ngược lại trả về false
    }
    public static function getCategory($id){
      return self::where('loai', $id)->get();
    }
   
    
}
