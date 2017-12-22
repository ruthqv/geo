<?php

namespace geo\geosystem\Models;

use Illuminate\Database\Eloquent\Model;

class Region extends Model
{

    protected $fillable = [
        'name',
        'country_id',
        'active'

    ];


    public function country() {
        return $this->belongsTo('geo\geosystem\Models\Country')->where('active',1);
    }

    public function subregions() {
        return $this->hasMany('geo\geosystem\Models\Subregion', 'region_id', 'id')->where('active',1);
    }

}
