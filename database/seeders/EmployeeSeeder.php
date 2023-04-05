<?php

namespace Database\Seeders;

use App\Models\Employee;
use App\Models\Salary;
use App\Models\Title;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {



        Employee::factory(20)
            ->hasTitles(3)
            ->hasSalaries(3)
//            ->has(Title::factory(3)->afterCreating(function (Title $title, $attributes) {
//                $oneYearFromNow = now()->modify('+1 year');
//
//                $employee = $title->employee;
//                $title->from_date = $employee->hire_date;
//                $title->to_date = fake()->dateTimeBetween($employee->hire_date, $oneYearFromNow);
//                $title->save();
//            }))
//            ->has(Salary::factory(3)->afterCreating(function (Salary $salary, $attributes) {
//                $employee = $salary->employee;
//            }))
            ->create();
//            ->each();
    }
}
