<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use App\Http\Requests\StoreTransactionRequest;
use App\Http\Requests\UpdateTransactionRequest;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;


class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $transactions = Transaction::where('buyer_id', Auth::user()->id)->get();

        return view('app.transaction',compact('transactions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreTransactionRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // 0. cek role user
        $auth = Auth::user();
        $user = User::findOrFail($auth->id);

        if ($user->role == 'Seller') {
            return back()->with('error', 'Anda Pedagang! Tidak diperbolehkan membeli');
        }

        // 1. cek produk ada atau tidak
        $request->validate([
            'product_id' => ['required', 'exists:products,id']
        ]);

        // 2. cek stock ada atau tidak
        $product = Product::findOrFail($request->product_id);
        $hargaProduk = $product->price;
        if ($product->stock == 0) {
            return back()->with('error', 'Maaf, Produk sedang tidak tersedia!');
        }

        // 3. cek saldo pembeli
        $saldoPembeli = $user->saldo;
        if ($saldoPembeli >= $hargaProduk) {
            // saldo cukup
            Transaction::create([
                'buyer_id' => $user->id,
                'seller_id' => $product->user_id,
                'product_id' => $product->id,
                'price' => $product->price,
                'invoice' => Str::random(10),
                'status' => 'Dipesan'
            ]);

            // mengurangi saldo pembeli
            $user->update([
                'saldo' => $saldoPembeli - $hargaProduk
            ]);

            $seller = User::findOrFail($product->user_id);
            // menambah saldo penjual
            // $seller->update([
            //     'saldo' => $seller->saldo + $hargaProduk
            // ]);

            if ($product->stock == 1) {
                // jika produk tersisa 1
                $product->update([
                    'stock' => $product->stock - 1,
                    'status' => 'Not Available'
                ]);
            } else {
                // jika produk lebih dari 1
                $product->update([
                    'stock' => $product->stock - 1
                ]);
            }
        } else {
            // saldo kurang
            return back()->with('error', 'Maaf, Saldo Anda tidak mencukupi!');
        }

        // transaksi berhasil
        return redirect()->route('transactions');
    }

    public function pesananBerhasil(Request $request)
    {
        // 1. Tambahkan saldo penjual
        $product = Product::findOrFail($request->product_id);
        $transaction = Transaction::findOrFail($request->transaction_id);

        $seller = User::findOrFail($product->user_id);
        $seller->update([
            'saldo' => $seller->saldo + $transaction->price
        ]);
    }

    public function pesananDibatalkan(Request $request)
    {
        // 1. Kurangi saldo penjual

        // 2. Kembalikan saldo pembeli

        // 3. kembalikan stock product
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function show(Transaction $transaction)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function edit(Transaction $transaction)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTransactionRequest  $request
     * @param  \App\Models\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTransactionRequest $request, Transaction $transaction)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function destroy(Transaction $transaction)
    {
        //
    }
}
