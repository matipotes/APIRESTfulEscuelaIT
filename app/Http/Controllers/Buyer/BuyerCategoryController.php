<?php

namespace App\Http\Controllers\Buyer;

use App\Buyer;
use App\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BuyerCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param  \App\Buyer  $buyer
     * @return \Illuminate\Http\Response
     */
    public function index(Buyer $buyer)
    {
        $categories = $buyer->transactions()
            ->with('product.categories')
            ->get()
            ->pluck('product.categories');
            /*->collapse()
            ->unique('id')
            ->values();*/

        return $this->showAll($categories);
    }
}
