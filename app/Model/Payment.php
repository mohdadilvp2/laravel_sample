<?php

namespace App\Model;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
  
    use SoftDeletes;

     /**
     * The table associated with the model.
     *
     * @var string
     */

    protected $table = 'payments';
    /**
     * The primary key of the table.
     *
     * @var string
     */

    protected $primaryKey = 'paymen_Id';

     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = ['paymen_Id','client_Id','start_date','end_date','hours','weekly_hour_Ids','in_dollar','in_rupees','paid_date','paid_to'];
    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];

    /**
     * Get the client record associated with the payment
     */
    public function Client(){

    	return $this->belongsTo('App\Model\Client','client_id');
    }
    /**
     * Get the user record associated with the payment
     */
    public function User(){

    	return $this->belongsTo('App\Model\User','id');
    }
}