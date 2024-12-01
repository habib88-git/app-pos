<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customers;
use App\Products;
use App\Transactions;
use App\Users;
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function admindashboard()
    {
        $countproduct = Products::all()->count();
        $countuser = Users::all()->count();
        $countcustomer = Customers::all()->count();
        $conttotal = Transactions::sum('total_amount');

        //perbulan
        $transactions = Transactions::selectRaw('MONTH(created_at) as month, SUM(total_amount) as total')
            ->groupBy('month')
            ->whereYear('created_at', Carbon::now()->year)
            ->orderBy('month')
            ->get();

        $months = [];
        $totals  = [];

        //loop untuk mempersiapkan bulan dan total transaksi
        foreach ($transactions as $transaction)
        {
            $months[] = Carbon::create()->month($transaction->month)->format('F'); //Nama Bulan
            $totals[] = $transaction->total; //total transaksi perbulan
        }

        return view('dashboard.admin', compact('countproduct', 'countuser', 'countcustomer', 'conttotal', 'months', 'totals'));
    }

    public function cashierdasboard()
    {
        return view('dashboard.cashier');
    }
}
