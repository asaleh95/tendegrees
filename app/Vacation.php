<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vacation extends Model
{
    //
    protected $guarded = [];
    protected $appends  = ['empolyee'];


    public function empolyee()
    {
        return $this->belongsTo('App\Employee','emp_id');
    }

    public function getStatusAttribute()
    {
        return ($this->attributes['status'] == 1) ? "Approved" : "pended" ;
    }

    public function getEmpolyeeAttribute()
    {
        if(!empty($this->attributes['emp_id'])){
            return $this->empolyee()->first()->name;
        }
    }
}
