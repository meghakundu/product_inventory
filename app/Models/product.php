<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class product extends Model
{
    use HasFactory;
    protected $fillable=['title','price','description','prod_images','status','reject_reason','user_id'];
    
    public function userProducts(){
        return $this->belongsTo(Product::class,'user_id','id');
    }

}
