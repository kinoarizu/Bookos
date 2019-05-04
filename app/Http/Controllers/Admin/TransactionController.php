<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;
use App\User;
use App\Transaction;

class TransactionController extends Controller
{
    public function index(Request $request)
    {
        $transactions = Transaction::all();
        $users = User::all();

        return view('admin.transactions.index', compact('transactions', 'users'));
    }

    public function detail($id)
    {
        $transaction = Transaction::find($id);
        $user = User::find($transaction->user_id);
        $product = Product::find($transaction->product_id);

        return view('admin.transactions.detail', compact('transaction', 'user', 'product'));
    }
}
