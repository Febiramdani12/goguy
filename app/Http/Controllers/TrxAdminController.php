<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TrxAdminModel;

class TrxAdminController extends Controller
{

	public function __construct()
    {
        $this->TrxAdminModel = new TrxAdminModel();
    }

    public function index()
    {
    	 $data = [
    		'trx' => $this->TrxAdminModel->getData(),
    	 ];

    	return view('pages.admin.trx', $data);

    }
}
