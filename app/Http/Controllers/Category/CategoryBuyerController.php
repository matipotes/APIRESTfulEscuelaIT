<?php

namespace App\Http\Controllers\Category;

use App\Buyer;
use App\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryBuyerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function index(Category $category)
    {
        $buyers = $category->products()
            ->whereHas('transactions')
            ->with('transactions.buyer')
            ->get()
            ->pluck('transactions')
            ->collapse()
            ->pluck('buyer')
            ->unique('id')
            ->values();

            return $this->showAll($buyers);

    }

   
}
