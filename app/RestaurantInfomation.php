<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class RestaurantInfomation
 *
 * @package App
 * @property string $restaurant_name
 * @property text $restaurant_description
*/
class RestaurantInfomation extends Model
{
    use SoftDeletes;

    protected $fillable = ['restaurant_name', 'restaurant_description'];
    
    
    
}
