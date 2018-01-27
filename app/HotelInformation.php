<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class HotelInformation
 *
 * @package App
 * @property string $hotel_name
 * @property text $hotel_description
*/
class HotelInformation extends Model
{
    use SoftDeletes;

    protected $fillable = ['hotel_name', 'hotel_description'];
    
    
    
}
