<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FinanceController extends Controller
{
    // Applications
    public function all_transactions()
    {
        return view('admin.finance.transactions');
    }

    public function all_invoices()
    {
        return view('admin.finance.invoices');
    }

}
