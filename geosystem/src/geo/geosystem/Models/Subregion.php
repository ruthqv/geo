<?php

namespace geo\geosystem\Models;

use Illuminate\Database\Eloquent\Model;

class Subregion extends Model
{

	protected $table= 'subregions';
    protected $fillable = [
        'name',
        'region_id',
        'active'

    ];


    public function region() {
        return $this->belongsTo('geo\geosystem\Models\Region')->where('active',1);
    }



}
