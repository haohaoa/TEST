<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    use HasFactory;

    protected $table = 'bill'; // Tên bảng trong cơ sở dữ liệu
    protected $fillable = ['name','id_user','id_product','address','status','email','phone','note','name','money','created_at','updated_at','quantity'];
    public static function getAll()
    {
        return self::all(); // Trả về tất cả các dữ liệu từ bảng "bills"
    }
    
    public static function getAddbill($data)
    {
        return static::create($data);//tạo bill
    }
    public static function getHistory($id){     
        return  Bill::where('id_user', $id)->orderByDesc('id')->get(); // Sắp xếp theo id hóa đơn giảm dần
    }
    
    public static function getBillById($id){
        return Bill::find($id);
    }
    
    public static function updateStatus($id){
        // Tìm đơn hàng cần cập nhật
       $bill = Bill::find($id);
       
       // Kiểm tra xem đơn hàng có tồn tại không
       if ($bill) {
           // Cập nhật trạng thái của đơn hàng thành đã xem
           $bill->status = "đã xem";
           $bill->save();
           return true;
       }
       
       // Trả về false nếu không tìm thấy đơn hàng cần cập nhật
       return false;
    }
    public static function updateStatusDG($id){
        // Tìm đơn hàng cần cập nhật
       $bill = Bill::find($id);
       
       // Kiểm tra xem đơn hàng có tồn tại không
       if ($bill) {
           // Cập nhật trạng thái của đơn hàng thành đã xem
           $bill->status = "đã Giao";
           $bill->save();
           return true;
       }
       
       // Trả về false nếu không tìm thấy đơn hàng cần cập nhật
       return false;
    }
    public static function countUnseenBills()
    {
        // Đếm số lượng đơn hàng chưa xem
        return self::where('status', 'chưa xem')->count();
    }

}
