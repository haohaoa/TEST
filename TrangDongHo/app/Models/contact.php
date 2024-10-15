<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class contact extends Model
{
    use HasFactory;
    protected $table = 'contact';
    protected $fillable= ['message','email','phone','id_bill','name'];

    public static function addcontact($data){
        return self::create($data);
    }
    // public static function getall(){
    //     return self::all();
    // }
    public static function getall(){
        return self::orderBy('created_at', 'desc')->get();
    }
    
}
