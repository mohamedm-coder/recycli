<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kidma extends Model
{
    use HasFactory;
    protected $fillable=['location', 'phone','address'];
}
