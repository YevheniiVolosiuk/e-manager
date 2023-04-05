<?php

namespace App\Http\Controllers\Employee;

use App\Models\Employee;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Enums\EmployeeGenderEnum;
use App\Http\Controllers\Controller;
use App\Http\Requests\Employee\EmployeeStoreRequest;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('employee.index', [
            'employees' => Employee::paginate(15),
            'genders' => EmployeeGenderEnum::cases(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(EmployeeStoreRequest $request): RedirectResponse
    {
//        dd($request->all());
        $employee = Employee::create($request->validated());

        return redirect()->route('employees.index', $employee)->withSuccess('Employee added successfully !');
    }

    /**
     * Display the specified resource.
     */
    public function show(Employee $employee)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Employee $employee)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Employee $employee)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Employee $employee)
    {
        //
    }
}
