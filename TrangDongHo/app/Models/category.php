<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class category extends Model
{   protected $table ='categories';
    protected $fillable=['id','name','description','created_at','updated_at'];
    public static function getall(){
        return self::all();
    }
}
