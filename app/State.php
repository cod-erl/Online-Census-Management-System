<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    protected $guarded=[];

    /**
     * Get the households for the state.
     */
    public function households()
    {
        return $this->belongTo('App\Household');
    }

}
