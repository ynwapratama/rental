<?php

namespace App\Http\Controllers\Orders\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Database\Eloquent\Model;
use Laravel\Lumen\Auth\Authorizable;
use Laravel\Passport\HasApiTokens;

class Orders_detail extends Model implements AuthenticatableContract, AuthorizableContract
{
    use HasApiTokens, Authenticatable, Authorizable;

    protected $table 		= "Orders_detail";
		protected $primaryKey 	= "orders_detail_serial_id";
		protected $guarded = array('orders_detail_serial_id');

		public $timestamps = false;
}
