<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    use HasFactory;

    protected $fillable = [
        'full_name',
        'phone_number',
        'email_address',
        'home_address',
        'date_of_birth',
        'citizenship',
        'civil_status',
        'degree',
        'job_applying_for',
        'date_today',
        'resume',
        'gov_ids',
    ];


}


