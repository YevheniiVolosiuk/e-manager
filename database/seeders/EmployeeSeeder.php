<?php

namespace Database\Seeders;

use App\Models\Department;
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
            ->create()
            ->each(function (Employee $employee) {
                $departmentIds = Department::pluck('id')->shuffle()->take(rand(1, 5))->toArray();
                $employee->departments()->attach($departmentIds, [
                    'from_date' => fake()->dateTimeBetween('2020-01-01', '2023-01-01'),
                    'to_date' => fake()->randomElement([fake()->dateTimeBetween('2023-01-01')], null),
                ]);
            });

    }
}
