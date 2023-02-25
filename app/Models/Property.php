<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;
    protected $fillable = ['country','city','street','capacity','price','isavailable','user_id'];

    public function User()
    {
        return $this->belongsTo(User::class,$foreignKey='user_id');
    }

    public function Propertyimg()
    {
        return $this->hasMany(Propertyimg::class,$foreignKey='properties_id');
    }


    public function services()
    {
    return $this->belongsToMany(Service::class,'propertyservices','properties_id','services_id');

    }
    public function users()
    {
    return $this->belongsToMany(User::class,'userproperties');
    }



}
