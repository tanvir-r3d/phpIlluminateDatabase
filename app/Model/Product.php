<?php
namespace App\Model;

use \Illuminate\Database\Eloquent\Model;

class Product extends Model{
    protected $table="products";
    protected $primaryKey="id";
    protected $fillable=["name","purchase_price","sell_price"];
}