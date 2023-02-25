<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Userhobby extends Model
{
    use HasFactory;
    protected $fillable = ['hobbies_id','users_id'];
}
