<?php

namespace App\Http\Models;
use Illuminate\Database\Eloquent\Model;
use App\User;

class Role extends Model
{
    protected $fillable = ['name'];

    public $timestamps = false;
//Связи
    public function users()
    {
        return $this->hasMany(User::class);
    }
}
