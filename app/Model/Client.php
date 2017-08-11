<?php

namespace App\Model;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;


class Client extends Model
{
  
    use SoftDeletes;
    /**
     * The primary key of the table.
     *
     * @var string
     */

    protected $primaryKey = 'client_id';

     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = ['name','description','weekly_hour','hourly_rate','skype','email'];
    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];

     /**
     * Get the weeklyhour record associated with the client
     */
    public function WeeklyHour()
    {
        return $this->hasMany('App\Model\WeeklyHour');
        
    }
     /**
     * Get the payment record associated with the client
     */

    public function Payment()
    {
        return $this->hasMany('App\Model\Payment');
        
    }
}