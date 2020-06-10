<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Gadget extends Model
{
    use Searchable;
    protected $table = "gadget";
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'brand_id', 'year_released', 'image', 'price', 'screen_size', 'resolution', 'camera_pixel', 'ram', 'chip', 'battery', 'os', 'storage'];
    public $timestamps = true;

    public function brand()
    {
        return $this->belongsTo('App\Brand', 'brand_id', 'id');
    }
}
