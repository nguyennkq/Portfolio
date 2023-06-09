<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    use HasFactory;
    protected $guarded= [];

    public function category(){
        return $this->belongsTo(PortfolioCategory::class,'portfolio_category_id','id');
    }
}
