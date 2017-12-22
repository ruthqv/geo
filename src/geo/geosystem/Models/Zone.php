<?php

namespace geo\geosystem\Models;

use Illuminate\Database\Eloquent\Model;


class Zone extends Model
{

    protected $fillable = [
        'name',
        'active',
    ];


    public function ranges() {
        return $this->hasMany('logistic\logisticsystem\Models\Range');
    }

     public function countries() {
        return $this->hasMany('geo\geosystem\Models\Country');
    }
}
