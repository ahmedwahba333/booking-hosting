<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Propertyservice extends Model
{
    use HasFactory;
    protected $fillable = ['services_id','properties_id'];
    protected $table ="Propertyservices";
    public $timestemps= false;
   
    // public function serv()
    // {
    //     return $this->belongsToMany(User::class, 'role_user');
    // }
   
   
}
