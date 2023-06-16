<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;
    protected $fillable=['name','prix','photo', 'description'];
    public function setName($name)
    {
        $this->attributes['name'] = $name;
    }
    public function setPrix($prix)
    {
        $this->attributes['prix'] = $prix;
    }
    public function setPhoto($photo)
    {
        $this->attributes['photo'] = $photo;
    }
    public function setDescription($description)
    {
        $this->attributes['description'] = $description;
    }
}
