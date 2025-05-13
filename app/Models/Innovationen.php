<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Innovationen extends Model
{
    protected $guarded=[];
    protected $table = 'innovationen';    

    public function category1Model(){
        return $this->BelongsTo(InnovationCategory::class,'category1','id');
    }
    public function category2Model(){
        return $this->BelongsTo(InnovationCategory::class,'category2','id');
    }
    public function category3Model(){
        return $this->BelongsTo(InnovationCategory::class,'category3','id');
    }
    public function category4Model(){
        return $this->BelongsTo(InnovationCategory::class,'category4','id');
    }
}
