<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Block extends Model
{

    protected $primaryKey = 'BlockID';
    public static function topSellers(){
        return static::selectRaw('year(created_at) year, monthname(created_at) month, count(*) published') 
        ->groupBy('year', 'month')
        ->orderByRaw('min(created_at)')
        ->get()
        ->toArray();
    }
}
