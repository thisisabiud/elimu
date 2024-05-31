<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;

class Guardian extends Model
{
    use HasFactory, HasUuids;


    public function children(): HasMany
    {
        return $this->hasMany(Student::class);
    }

    public function fullname(): string
    {
        return $this->firstname . ' ' . $this->middle . ' ' . $this->lastname;
    }

    public function age() : integer
    {
        return date('Y') - $this->birth_year;
    }

}
