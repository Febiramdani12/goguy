<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class TrxAdminModel extends Model
{
    public function getData()
    {
    	return DB::table('transaction_details')
    	->join('products', 'products.id', '=', 'transaction_details.products_id')
    	->join('users', 'users.id', '=', 'products.users_id')
    	->get();
    }
}
