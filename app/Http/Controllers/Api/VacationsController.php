<?php

namespace App\Http\Controllers\Api;

use App\Vacation;
use App\Repositories\Vacations;
use App\Employee;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VacationsController extends Controller
{
    private $vacRepository;


    public function __construct(Vacations $vac)
    {
        $this->vacRepository = $vac;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Employee $boss)
    {
        //
        // return $boss->employees()->get();
        $vacations = $this->vacRepository->all($boss);
       // dd($vacations);
        // return $vacations;
        return View('vacations.all', ['vacations' =>$vacations]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $vacation = $this->vacRepository->store($request);
        return $vacation;
        // return $vacation;
        // return redirect()->route('vacations/'.$vacation->id);
        // return View('vacations.show', ['vacation' =>$vacation]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Vacation $vacation)
    {
        //
        $vacation = $this->vacRepository->show($vacation);
        // return $vacation;
        return View('vacations.show', ['vacation' =>$vacation]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
