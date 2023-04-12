<?php

namespace App\Http\Controllers\Employee;

use App\Http\Requests\Employee\EmployeeUpdateRequest;
use App\Models\Employee;
use Illuminate\Http\RedirectResponse;
use App\Enums\EmployeeGenderEnum;
use App\Http\Controllers\Controller;
use App\Http\Requests\Employee\EmployeeStoreRequest;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
//        dd($request);
        $employees = Employee::query()
            ->when(request('search'), function ($query) {
                $query->searchByFirstName()
                    ->orWhere(function ($query) {
                        $query->searchByLastName();
                    });
            })
            ->paginate(10);

        return view('employee.index', [
            'employees' => $employees,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('employee.create', [
            'genders' => EmployeeGenderEnum::cases(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(EmployeeStoreRequest $request): RedirectResponse
    {
        Employee::create($request->validated());

        return redirect()
            ->route('employees.index')
            ->withSuccess('Employee added successfully !');
    }

    /**
     * Display the specified resource.
     */
    public function show(Employee $employee)
    {
        return view('employee.show', [
            'employee' => $employee,
            'genders' => EmployeeGenderEnum::cases(),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Employee $employee)
    {
        return view('employee.edit', [
            'employee' => $employee,
            'genders' => EmployeeGenderEnum::cases(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(EmployeeUpdateRequest $request, Employee $employee)
    {
        $employee->update($request->validated());

        return redirect()
            ->route('employees.index')
            ->withSuccess("Employee \"{$employee->fullName}\" updated successfully !");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Employee $employee)
    {
        $employee->delete();

        return redirect()
            ->route('employees.index')
            ->withSuccess("Employee \"{$employee->fullName}\" deleted successfully !");
    }

}
