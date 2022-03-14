<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Current extends Model
{
    use HasFactory;
    protected $fillable=[
        'job_title',
        'salary',
        'location',
        'qualification',
        'experience',
       
        'job_description'
    ];
}
