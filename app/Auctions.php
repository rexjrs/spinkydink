<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Auctions extends Model
{
	protected $table = 'auctions';

    protected $fillable = [
        'name', 'user', 'description', 'category', 'bid', 'bidder', 'increment', 'date_end', 'image1', 'image2', 'image3', 'image4'
    ];
}
