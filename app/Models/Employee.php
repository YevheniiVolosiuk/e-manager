<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Http\Request;

class Employee extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'employees';

    protected $casts = [
        'birth_date' => 'date',
        'hire_date' => 'date',
        'created_at' => 'date',
    ];

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

    protected function birthDate(): Attribute
    {
        return new Attribute(
            get: fn($value) => Carbon::parse($value)->format(config('app.date_format')),
            set: fn($value) => Carbon::createFromFormat(config('app.date_format'), $value)->format('Y-m-d'),
        );
    }

    protected function hireDate(): Attribute
    {
        return new Attribute(
            get: fn($value) => Carbon::parse($value)->format(config('app.date_format')),
            set: fn($value) => Carbon::createFromFormat(config('app.date_format'), $value)->format('Y-m-d'),
        );
    }

    protected function createdAt(): Attribute
    {
        return new Attribute(
            get: fn($value) => Carbon::parse($value)->format('d/m/Y H:i'),
        );
    }

    protected function getfullNameAttribute(): string
    {
        return $this->first_name . ' ' . $this->last_name;
    }

    public function scopeSearchByFirstName(Builder $query): void
    {
        $query->where('first_name', 'LIKE', '%' . request('search'). '%');
    }

    public function scopeSearchByLastName(Builder $query): void
    {
        $query->where('last_name', 'LIKE', '%' . request('search'). '%');
    }
}
