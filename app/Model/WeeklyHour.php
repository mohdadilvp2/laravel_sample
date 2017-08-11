<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class WeeklyHour extends Model
{
    use SoftDeletes;

     /**
     * The table associated with the model.
     *
     * @var string
     */

    protected $table = 'WeeklyHour';
    /**
     * The primary key of the table.
     *
     * @var string
     */

    protected $primaryKey = 'weekly_hour_id';

      /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'client_id', 'start_date', 'end_date','hours','missing_hour','hourly_rate','total'
    ];
    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];

     /**
     * Get the client record associated with weekly hour
     */

    public function client(){

    	return $this->belongsTo('App\Model\Client');
    }

}