<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Transaction;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard(Request $request)
{
    // Get total user count
    $totalUsers = User::count();
    
    // Fetch the total transactions count and pagination details
    $transactionsPerPage = 10;
    $totalTransactions = Transaction::count();
    
    // Calculate total pages for pagination
    $totalPages = ceil($totalTransactions / $transactionsPerPage);
    
    // Get the current page from the request, default to page 1
    $page = $request->input('modalPage', 1);

    // Fetch transactions for the current page, ordered by date descending
    $allTransactions = Transaction::orderBy('transaction_date', 'desc')
                                 ->skip(($page - 1) * $transactionsPerPage)
                                 ->take($transactionsPerPage * 2) // Fetch twice the amount for merging
                                 ->get();

    // Split transactions into two parts for left and right tables (only on transactions history main page)
    $transactionsLeft = $allTransactions->slice(0, $transactionsPerPage);
    $transactionsRight = $allTransactions->slice($transactionsPerPage, $transactionsPerPage);

    // Return the dashboard view with the required data
    return view('dashboard', compact('totalUsers', 'transactionsLeft', 'transactionsRight', 'totalPages'));
}

}
