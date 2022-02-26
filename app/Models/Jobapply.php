<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jobapply extends Model
{
    use HasFactory;
    protected $fillable=[
        'job_title',
        'name',
        'email',
        'phone',
        'resume',
        'job_id',
        'user_id',
    ];
}
