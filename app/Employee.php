<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    //
    protected $guarded = [];

    public function employees()
    {
        return $this->hasMany(Employee::class, 'boss_id');
    }

    public function boss()
    {
        return $this->belongsTo(Employee::class,'boss_id');
    }

    public function vacations()
    {
        return $this->hasMany('App\Vacation','emp_id');
    }

    // public function bossVacations()
    // {
    //     return $this->hasManyThrough('App\Vacation', 'App\Employee');
    // }
}
