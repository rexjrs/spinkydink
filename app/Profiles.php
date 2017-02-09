<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profiles extends Model
{
	protected $table = 'profiles';

    protected $fillable = [
        'user', 'fname', 'lname', 'banknumber', 'bankname', 'bankholder', 'address1', 'address2', 'city', 'country', 'phone', 'zipcode'
    ];
}
