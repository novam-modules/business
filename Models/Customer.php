<?php

namespace Admin\Business\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = [
        "name", "address", "owner_id", "region", "type"
    ];
}
