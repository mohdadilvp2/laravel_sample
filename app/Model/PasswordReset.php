<?php

namespace App\Model;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class PasswordReset extends Model
{
   use SoftDeletes;

    /**
     * The table associated with the model.
     *
     * @var string
     */
  
   protected $table = 'password_resets';
   /**
     * The primary key of the table.
     *
     * @var string
     */

   protected $primaryKey = '';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

   protected $fillable = ['email','token'];
   /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
   protected $dates = ['deleted_at'];

   
}