<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class TrxAdminModel extends Model
{
    public function getData()
    {
    	return DB::table('transaction_details')
    	->get();
    }
}
