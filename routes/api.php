<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
/*
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});*/

Route::apiresource('users', 'User\UserController');


Route::apiresource('buyers', 'Buyer\BuyerController', ['only' => ['index', 'show']]);
Route::apiresource('buyers.transactions', 'Buyer\BuyerTransactionController', ['only' => ['index']]);
Route::apiresource('buyers.products', 'Buyer\BuyerProductController', ['only' => ['index']]);
Route::apiresource('buyers.sellers', 'Buyer\BuyerSellerController', ['only' => ['index']]);


Route::apiresource('sellers', 'Seller\SellerController', ['only' => ['index', 'show']]);


Route::apiresource('products', 'Product\ProductController', ['only' => ['index', 'show']]);


Route::apiresource('transactions', 'Transaction\TransactionController', ['only' => ['index', 'show']]);
Route::apiresource('transactions.categories', 'Transaction\TransactionCategoryController', ['only' => ['index']]);
Route::apiresource('transactions.sellers', 'Transaction\TransactionSellerController', ['only' => ['index']]);


Route::apiresource('categories', 'Category\CategoryController');
