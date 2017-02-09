<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bids extends Model
{
	protected $table = 'bids';

    protected $fillable = [
        'product_id', 'user', 'bid'
    ];
}
