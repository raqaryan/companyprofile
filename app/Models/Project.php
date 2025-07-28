<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'location',
        'contract_type',
        'contract_period',
        'year',
        'client_name', 
        'image',
        'client_logo',
    ];
}
