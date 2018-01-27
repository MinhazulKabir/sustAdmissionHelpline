<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Transportation
 *
 * @package App
 * @property string $cost
 * @property string $source
 * @property string $middle_point
 * @property string $destination
*/
class Transportation extends Model
{
    use SoftDeletes;

    protected $fillable = ['cost', 'source', 'middle_point', 'destination'];
    
    
    
}
