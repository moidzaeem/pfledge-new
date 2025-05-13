<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Marketplace extends Model
{
    protected $guarded = [];

// In Marketplace model

public function category1()
{
    return $this->belongsTo(MarketplaceCategory::class, 'category1');
}

public function category2()
{
    return $this->belongsTo(MarketplaceCategory::class, 'category2');
}

public function category3()
{
    return $this->belongsTo(MarketplaceCategory::class, 'category3');
}

public function category4()
{
    return $this->belongsTo(MarketplaceCategory::class, 'category4');
}

}
