<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TransactionController extends Controller
{
    /**
     * Display a listing of all transactions with pagination.
     *
     * @param Request $request
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        // Number of transactions to display per page
        $perPage = 10; 

        // Current page number
        $currentPage = $request->query('page', 1);

        // Retrieve transactions from the database with pagination
        $transactions = Transaction::paginate($perPage, ['*'], 'page', $currentPage);

        // Return the view with transactions
        return view('transactions.index', compact('transactions'));
    }
}
