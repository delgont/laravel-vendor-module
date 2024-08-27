<?php

namespace Modules\Vendor\Entities;

use Illuminate\Database\Eloquent\Model;

class Vendor extends Model
{
    protected $guarded = [];

    public function contactPeople()
    {
        return $this->hasMany(VendorContactPerson::class, 'vendor_id');
    }
    
}
