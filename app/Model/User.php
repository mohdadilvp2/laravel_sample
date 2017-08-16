<?php

namespace App\Model;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\App\Model\Expense;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The table associated with the model. //TODO
     *
     * @var string
     */

    protected $table = 'users';
    /**
     * The primary key of the table.
     *
     * @var string
     */
    protected $primaryKey = 'user_id';

     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = [
        'name', 'email', 'password','image','remember_token'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];
     
     /**
     * Get the expense record associated with the user
     */

     public function expense()
    {
        return $this->hasMany('App\Model\Expense','paid_by');
        
    }

    /**
     * Get the payment record associated with the user
     */

    public function paymentReceived()
    {
        return $this->hasMany('App\Model\Payment','paid_to');
        
    }
}
