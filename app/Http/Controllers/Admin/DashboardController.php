<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\Transaction;

class DashboardController extends Controller
{
    public function index()
    {
        $customer    = User::count();
        $revenue     = Transaction::sum('total_price');
        $transaction = Transaction::count();
                $notifications = auth()->user()->unreadNotifications;
        return view('pages.admin.dashboard', [
            'customer' => $customer,
            'revenue' => $revenue,
            'transaction' => $transaction,
            'notifications' => $notifications
        ]);
    }
    public function markNotification(Request $request)
{
    auth()->user()
        ->unreadNotifications
        ->when($request->input('id'), function ($query) use ($request) {
            return $query->where('id', $request->input('id'));
        })
        ->markAsRead();

    return response()->noContent();
}
}
