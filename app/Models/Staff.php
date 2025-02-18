<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    use HasFactory;

    protected $fillable =[
        'first_name','last_name','email','contact_no','position','address','dob','username','password','image'
    ];
}
