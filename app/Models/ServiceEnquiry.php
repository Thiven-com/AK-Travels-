<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ServiceEnquiry extends Model
{
     protected $fillable = [
        "full_name",
        
        "dob",
        "age",
        "gender",
        "contact",
        "email",
        "travel_date",
        "message",
    ];
}
