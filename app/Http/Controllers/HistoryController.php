<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;
use App\Models\Product;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class HistoryController extends Controller
{
    public function index() {

    $transactions = Transaction::where('buyer_id', Auth::user()->id)->where('status', '!=', 'Dipesan')->get();

    $sellerTransactions = Transaction::where('status', '!=', 'Dipesan')->get();

    return view('app.history', compact('transactions', 'sellerTransactions'));
    }
}
