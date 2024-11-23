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

        // Fetch transactions for the current page
        $transactions = Transaction::skip(($page - 1) * $transactionsPerPage)->take($transactionsPerPage)->get();

        // If the request is an AJAX request, return the modal content
        if ($request->ajax()) {
            return view('partials.transaction-modal-content', compact('transactions', 'totalPages'));
        }

        // Return the dashboard view with the required data
        return view('dashboard', compact('totalUsers', 'transactions', 'totalPages'));
    }

    public function showTransactions()
    {
        // Fetch all transactions
        $transactions = Transaction::all();

        // Return the transactions view
        return view('transactions.dashboard', compact('transactions'));
    }

    public function handleTransactions(Request $request)
    {
        // Validate the incoming request for transaction creation
        $validated = $request->validate([
            'transaction_id' => 'required|int',
            'transaction_date' => 'required|date',
            'transaction_type' => 'required|string|max:50',
            'reference_number' => 'required|string|max:30',
        ]);

        // Create a new transaction record
        $transaction = Transaction::create($validated);

        // Redirect to the transactions list
        return redirect()->route('transactions.dashboard')->with('success', 'Transaction created successfully!');
    }

    public function getModalTransactions(Request $request)
    {
    $transactionsPerPage = 10;
    $page = $request->input('modalPage', 1);

    // Fetch transactions for the current page
    $transactions = Transaction::skip(($page - 1) * $transactionsPerPage)->take($transactionsPerPage)->get();

    // Return the modal content as a view (partial view)
    return view('partials.transaction-modal-content', compact('transactions'));
    }
}
