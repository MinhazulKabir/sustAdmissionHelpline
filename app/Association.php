<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Association
 *
 * @package App
 * @property string $association_name
 * @property text $association_short_description
*/
class Association extends Model
{
    use SoftDeletes;

    protected $fillable = ['association_name', 'association_short_description'];
    
    
    
}
