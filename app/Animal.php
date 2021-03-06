<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Vazn;
use App\Gale;
class Animal extends Model
{

    protected $table = 'animals';
    protected $guarded = array();
    protected $casts = [
        'parents' => 'array',
        'children' => 'array'
    ];
    public function gale()
    {
        return $this->belongsTo(Gale::class, 'gale_id');
    }
    public function vazns()
    {
    	return $this->hasMany(Vazn::class,'animal_id');
    }
    
}
