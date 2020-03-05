<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    //
    protected $table = "suppliers";
    protected $fillable = ['name'];

    public function supplierProduct()
    {
        return $this->hasMany('\App\SupplierProduct', 'supply_id');
    }
}
