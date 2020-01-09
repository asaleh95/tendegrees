<?php


namespace App\Repositories;
use App\Vacation;
use App\Employee;
use App\Events\VacationAccepted;
use Illuminate\Http\Request;


class Vacations
{
    public function all(Employee $boss)
    {
        return $boss->with('employees.vacations')->get()->pluck('employees.*.vacations')->flatten();
    }

    public function show(Vacation $vacation)
    {
        return $vacation;
    }

    public function store(Request $request)
    {
        $request->validate([
            'vacation_id' => 'required|numeric',
            'vacation_id' => 'required|numeric',
        ]);
        $vacation = Vacation::find($request->vacation_id)->update(['status' => 1]);
        $emp = Employee::find($request->emp_id);
        event(new VacationAccepted($emp));
        return "Done";
    }
}