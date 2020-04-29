<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    protected $table = "brand";
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'image'];
    public $timestamps = true;

//    public function gadgets()
//    {
//        return $this->hasMany('App\Gadget', 'brand_id', 'id');
//    }
}
