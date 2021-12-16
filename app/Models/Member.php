<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;

    public function neighborhood()
    {
        return $this->belongsTo(Neighborhood::class);
    }

    public function cell()
    {
        return $this->belongsTo(Cell::class);
    }

    public function meetings()
    {
        return $this->belongsToMany(Meeting::class);
    }

    public function schools()
    {
        return $this->belongsToMany(School::class);
    }
}
