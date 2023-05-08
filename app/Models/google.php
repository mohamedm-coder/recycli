<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class google extends Model
{
    use HasFactory;
    protected $fillable=['location','photo', 'phone','address'];
}
