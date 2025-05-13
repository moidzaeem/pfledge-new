<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MarketplaceCategory extends Model
{
    protected $guarded =[];
    public function marketplaces()
    {
        return $this->hasMany(Marketplace::class);
    }
}
