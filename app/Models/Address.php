<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory, HasUuids;
    

  /**
   * Get all of the guardians for the Address
   *
   * @return \Illuminate\Database\Eloquent\Relations\HasMany
   */
  public function guardians(): HasMany
  {
      return $this->hasMany(Guardian::class);
  }

}
