<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Employee extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'employees';

    protected $fillable = [
        'first_name',
        'last_name',
        'birth_date',
        'hire_date',
    ];

    public function salary()
    {
        return $this->belongsTo(Salary::class);
    }

    public function title()
    {
        return $this->belongsTo(Title::class);
    }

    public function departments()
    {
        return $this->belongsToMany(Department::class, 'department_employee', 'employee_id', 'id');
    }

    public function managers()
    {
        return $this->belongsToMany(Department::class, 'department_manager', 'employee_id', 'id');
    }
}
