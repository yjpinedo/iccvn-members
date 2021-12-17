<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sector extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description'];

    public function neighborhoods()
    {
        return $this->hasMany(Neighborhood::class);
    }

    public function cells()
    {
        return $this->hasMany(Cell::class);
    }
}
