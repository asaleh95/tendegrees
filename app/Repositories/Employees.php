<?php


namespace App\Repositories;
use App\Employee;

class Employees
{
    public function all()
    {
        return Employee::all();
    }
}