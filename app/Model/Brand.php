<?php

namespace App\Model;
use \Illuminate\Database\Eloquent\Model;
class Brand extends Model{
    protected $table="brands";
    protected $primaryKey="id";
    protected $fillable=["name","contact_person","contact_email"];
}