<?php

namespace App\Http\Controllers\Transaction;

use App\Http\Controllers\Controller;
use App\Seller;
use App\Transaction;
use Illuminate\Http\Request;

class TransactionSellerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param  \App\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function index(Transaction $transaction)
    {
        $seller = $transaction->product->seller;

        return $this->showOne($seller);
    }

   
}
