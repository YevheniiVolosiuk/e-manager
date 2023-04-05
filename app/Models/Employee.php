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
        'gender',
        'hire_date',
    ];

    public function salaries()
    {
        return $this->hasMany(Salary::class);
    }

    public function titles()
    {
        return $this->hasMany(Title::class);
    }

    public function departments()
    {
        return $this->belongsToMany(Department::class, 'department_employee');
    }

    public function managers()
    {
        return $this->belongsToMany(Department::class, 'department_manager');
    }
}
