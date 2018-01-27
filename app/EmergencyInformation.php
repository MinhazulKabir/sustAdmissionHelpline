<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class EmergencyInformation
 *
 * @package App
 * @property text $emergency_info_admission
*/
class EmergencyInformation extends Model
{
    use SoftDeletes;

    protected $fillable = ['emergency_info_admission'];
    
    
    
}
