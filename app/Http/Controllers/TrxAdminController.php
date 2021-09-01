<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TrxAdminModel;
use App\TransactionDetail;

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

       public function details(Request $request, $id)
    {
        $transaction = TransactionDetail::with(['transaction.user', 'product.galleries'])->findOrFail($id);
        return view('pages.admin.trx-details', [
            'transaction' => $transaction
        ]);
    }

}
