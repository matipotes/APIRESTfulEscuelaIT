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
Route::apiresource('buyers.categories', 'Buyer\BuyerCategoryController', ['only' => ['index']]);


Route::apiresource('sellers', 'Seller\SellerController', ['only' => ['index', 'show']]);
Route::apiresource('sellers.transactions', 'Seller\SellerTransactionController', ['only' => ['index']]);
Route::apiresource('sellers.categories', 'Seller\SellerCategoryController', ['only' => ['index']]);
Route::apiresource('sellers.buyers', 'Seller\SellerBuyerController', ['only' => ['index']]);
Route::apiresource('sellers.products', 'Seller\SellerProductController', ['except' => ['show']]);


Route::apiresource('products', 'Product\ProductController', ['only' => ['index', 'show']]);
Route::apiresource('products.transactions', 'Product\ProductTransactionController', ['only' => ['index']]);
Route::apiresource('products.buyers', 'Product\ProductBuyerController', ['only' => ['index']]);
Route::apiresource('products.categories', 'Product\ProductCategoryController', ['only' => ['index', 'update', 'destroy']]);
Route::apiresource('products.buyers.transactions', 'Product\ProductBuyerTransactionController', ['only' => ['store']]);


Route::apiresource('transactions', 'Transaction\TransactionController', ['only' => ['index', 'show']]);
Route::apiresource('transactions.categories', 'Transaction\TransactionCategoryController', ['only' => ['index']]);
Route::apiresource('transactions.sellers', 'Transaction\TransactionSellerController', ['only' => ['index']]);


Route::apiresource('categories', 'Category\CategoryController');
Route::apiresource('categories.transactions', 'Category\CategoryTransactionController', ['only' => ['index']]);
Route::apiresource('categories.buyers', 'Category\CategoryBuyerController', ['only' => ['index']]);
Route::apiresource('categories.products', 'Category\CategoryProductController', ['only' => ['index']]);
Route::apiresource('categories.sellers', 'Category\CategorySellerController', ['only' => ['index']]);
