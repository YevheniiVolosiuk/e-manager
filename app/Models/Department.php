<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Department extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'employees';

    protected $fillable = [
        'name',
    ];

    public function employees()
    {
        return $this->belongsToMany(Employee::class, 'department_employee', 'employee_id', 'id');
    }

    public function managers()
    {
        return $this->belongsToMany(Employee::class, 'department_manager', 'employee_id', 'id');
    }
}
