<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
     protected $fillable = [
        'id','product_category_id' , 'name' , 'description' ,'price' , 'qty', 'discount' , 'weight' , 'imgaes' , 'tag'
     ];

}
    
