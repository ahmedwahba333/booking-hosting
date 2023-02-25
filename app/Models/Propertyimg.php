<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Propertyimg extends Model
{
    use HasFactory;
    protected $fillable = ['image','properties_id'];

    public function Property()
    {
        return $this->belongsTo(Property::class,$foreignKey='properties_id');
    }

}
