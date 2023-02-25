<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Userproperty extends Model
{
    use HasFactory;
    protected $fillable = ['startdate','enddate','description','userstatus','user_id','property_id'];
    // public $timestemps= false;

    public function Property()
    {
        return $this->belongsTo(Property::class);

    }

    public function User()
    {
        return $this->belongsTo(User::class);

    }
}
