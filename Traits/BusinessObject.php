<?php

namespace Admin\Business\Traits;

use Admin\Business\Models\Customer;


/**
 *
 */
trait BusinessObject
{
    public function Customer()
    {
        return $this->belongsTo(Customer::class);
    }
}
