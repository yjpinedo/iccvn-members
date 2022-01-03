<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Sector extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description'];

    public function getDescriptionAttribute($value)
    {
        return Str::limit($value, 50, ' ...');
    }

    public function neighborhoods()
    {
        return $this->hasMany(Neighborhood::class);
    }

    public function cells()
    {
        return $this->hasMany(Cell::class);
    }
}
