<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Category;
use App\Seller;

class Transaction extends Model
{
    //
    protected $fillable = [
        'quantity',
        'buyer_id',
        'product_id',

    ];

    public function buyer()
    {
        return $this->belongsTo(Buyer::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
