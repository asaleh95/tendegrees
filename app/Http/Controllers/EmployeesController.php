<?php

namespace App\Http\Controllers;
use App\Employee;
use App\Repositories\Employees;
use Illuminate\Http\Request;

class EmployeesController extends Controller
{
    private $empRepository;


    public function __construct(Employees $emp)
    {
        $this->empRepository = $emp;
    }

    /**
     * Display a listing of the CRUD entries.
     *
     * @param   void
     * @return  \Illuminate\Http\Response
     */
    public function index()
    {
        // $crud = crud_table(\App\Employee::class);
        $crud = $this->empRepository->all();

        return view('crud::scaffold.bootstrap3-table', ['crud' => $crud]);
    }

    /**
     * Display the CRUD create form.
     *
     * @param   void
     * @return  \Illuminate\Http\Response
     */
    public function create()
    {
        $crud = crud_entry(new \App\Employee);

        return view('crud::scaffold.bootstrap3-form', ['crud' => $crud]);
    }

    /**
     * Store the CRUD entry.
     *
     * @param   \Illuminate\Http\Request  $request
     * @return  \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $crud = new \App\Employee;
        $validator = $crud->crudEntry()->getValidator();

        $validator->validateRequest($request);

        if ($validator->passes())
        {
            $validator->save();
        }

        return $validator->redirect();
    }

    /**
     * Show the form for editing the current CRUD entry.
     *
     * @param   int  $id
     * @return  \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $crud = crud_entry(\App\Employee::findOrFail($id));

        return view('crud::scaffold.bootstrap3-form', ['crud' => $crud]);
    }

    /**
     * Update the CRUD entry.
     *
     * @param   \Illuminate\Http\Request  $request
     * @param   int  $id
     * @return  \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $model = \App\Employee::findOrFail($id);
        $validator = $model->crudEntry()->getValidator();

        $validator->validateRequest($request);

        if ($validator->passes())
        {
            $validator->save();
        }

        return $validator->redirect();
    }

    /**
     * Destroy the current CRUD entry.
     *
     * @param   int  $id
     * @param   string $csrf
     * @return  \Illuminate\Http\Response
     */
    public function destroy($id, $csrf)
    {
        if (csrf_token() != $csrf)
        {
            abort(403);
        }

        $model = \App\Employee::findOrFail($id);

        $model->delete();

        return redirect()->back();
    }
}
