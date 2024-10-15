<?php

namespace App\Models;
use Illuminate\Support\Facades\Hash;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class User extends Authenticatable
{
    use HasFactory;
    protected $table = 'users';
    protected $fillable = ['name', 'email', 'password', 'admin','token','status'];

    public static function getAll(){
        return user::all();
    }
    
    public static function getRecordByID($id){
        return self::find($id); // Hoặc có thể sử dụng self::findOrFail($id) nếu bạn muốn ném ngoại lệ nếu không tìm thấy ID
    }
    
    public static function addUser($data){
        return static::create($data);
    }
    
    public static function deleteUserById($id)
    {
        // Tìm người dùng theo ID và xóa nếu tồn tại
        $user = self::find($id);
        if ($user) {
            $user->delete();
            return true; // Trả về true nếu xóa thành công
        }
        return false; // Trả về false nếu không tìm thấy người dùng
    }
    public static function getnameuser($search){
        return static::where('name', 'like', '%' . $search . '%')->get();
    } 
   
}
