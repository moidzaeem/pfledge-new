<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Blogs extends Model
{
    protected $guarded=[];

    public function category1Model(){
        return $this->BelongsTo(BlogCategory::class,'category1','id');
    }
    public function category2Model(){
        return $this->BelongsTo(BlogCategory::class,'category2','id');
    }
    public function category3Model(){
        return $this->BelongsTo(BlogCategory::class,'category3','id');
    }
    public function category4Model(){
        return $this->BelongsTo(BlogCategory::class,'category4','id');
    }
}
