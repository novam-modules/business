<?php

namespace Modules\Business\Traits;

use Modules\Business\Models\Customer;


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
