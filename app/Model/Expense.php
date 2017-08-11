<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Expense extends Model
{
  
    use SoftDeletes;

     /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'expense';
    /**
     * The primary key of the table.
     *
     * @var string
     */

    protected $primaryKey = 'expense_id';

     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = ['paid_to','reason','paid_by','date','description'];
    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];

    /**
     * Get the user record associated with the client
     */
    public function users()
    {
        return $this->belongsTo('App\Model\User','id');
        
    }


}
